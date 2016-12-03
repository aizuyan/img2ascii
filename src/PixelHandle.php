<?php
/**
 *                       ::                              ::
 *                     :;J7, :,                        ::;7:
 *                     ,ivYi, ,                       ;LLLFS:
 *                     :iv7Yi                       :7ri;j5PL
 *                    ,:ivYLvr                    ,ivrrirrY2X,
 *                    :;r@Wwz.7r:                :ivu@kexianli.
 *                   :iL7::,:::iiirii:ii;::::,,irvF7rvvLujL7ur
 *                  ri::,:,::i:iiiiiii:i:irrv177JX7rYXqZEkvv17
 *               ;i:, , ::::iirrririi:i:::iiir2XXvii;L8OGJr71i
 *             :,, ,,:   ,::ir@mingyi.irii:i:::j1jri7ZBOS7ivv,
 *                ,::,    ::rv77iiiriii:iii:i::,rvLq@huhao.Li
 *            ,,      ,, ,:ir7ir::,:::i;ir:::i:i::rSGGYri712:
 *          :::  ,v7r:: ::rrv77:, ,, ,:i7rrii:::::, ir7ri7Lri
 *         ,     2OBBOi,iiir;r::        ,irriiii::,, ,iv7Luur:
 *       ,,     i78MBBi,:,:::,:,  :7FSL: ,iriii:::i::,,:rLqXv::
 *       :      iuMMP: :,:::,:ii;2GY7OBB0viiii:i:iii:i:::iJqL;::
 *      ,     ::::i   ,,,,, ::LuBBu BBBBBErii:i:i:i:i:i:i:r77ii
 *     ,       :       , ,,:::rruBZ1MBBqi, :,,,:::,::::::iiriri:
 *    ,               ,,,,::::i:  @arqiao.       ,:,, ,:::ii;i7:
 *   :,       rjujLYLi   ,,:::::,:::::::::,,   ,:i,:,,,,,::i:iii
 *   ::      BBBBBBBBB0,    ,,::: , ,:::::: ,      ,,,, ,,:::::::
 *   i,  ,  ,8BMMBBBBBBi     ,,:,,     ,,, , ,   , , , :,::ii::i::
 *   :      iZMOMOMBBM2::::::::::,,,,     ,,,,,,:,,,::::i:irr:i:::,
 *   i   ,,:;u0MBMOG1L:::i::::::  ,,,::,   ,,, ::::::i:i:iirii:i:i:
 *   :    ,iuUuuXUkFu7i:iii:i:::, :,:,: ::::::::i:i:::::iirr7iiri::
 *   :     :rk@Yizero.i:::::, ,:ii:::::::i:::::i::,::::iirrriiiri::,
 *    :      5BMBBBBBBSr:,::rv2kuii:::iii::,:i:,, , ,,:,:i@petermu.,
 *         , :r50EZ8MBBBBGOBBBZP7::::i::,:::::,: :,:,::i;rrririiii::
 *             :jujYY7LS0ujJL7r::,::i::,::::::::::::::iirirrrrrrr:ii:
 *          ,:  :@kevensun.:,:,,,::::i:i:::::,,::::::iir;ii;7v77;ii;i,
 *          ,,,     ,,:,::::::i:iiiii:i::::,, ::::iiiir@xingjief.r;7:i,
 *       , , ,,,:,,::::::::iiiiiiiiii:,:,:::::::::iiir;ri7vL77rrirri::
 *        :,, , ::::::::i:::i:::i:i::,,,,,:,::i:i:::iir;@Secbone.ii:::
 *
 * 
 *          Doge bless you!
 *          No bug!
 *
 * @Author yanruitao<yanruitao@zuoyebang.com>
 * @Date
 * @Desc
 */

namespace Aizuyan\Image2Ascii;

class PixelHandle
{
    // 要处理的图片资源
    protected $resourceImage = null;

    // 图片的长、高
    protected $imagesX = 0;
    protected $imagesY = 0;

    // 原始图片最大最小像素值
    protected $grayMin = 255;
    protected $grayMax = 0;

    // 图片原始像素点信息
    protected $pixels = [];

    // 处理缓存
    protected $pixelsCache = [];

    public function __construct($resourceImage)
    {
        $this->resourceImage = $resourceImage;
    }

    public function handle()
    {
        $this->imagesX = imagesx($this->resourceImage);
        $this->imagesY = imagesy($this->resourceImage);
        
        for ($x = 0; $x < $this->imagesX; $x++) {
            for ($y = 0; $y < $this->imagesY; $y++) {
                $rgb = imagecolorat($this->resourceImage, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
                $gray = $this->rgb2Gray($r, $g, $b);
                $this->pixels[$x][$y] = $gray;
                if ($gray < $this->grayMin) {
                    $this->grayMin = $gray;
                }
                if ($gray > $this->grayMax) {
                    $this->grayMax = $gray;
                }
            }
        }
        $this->pixelsCache = $this->pixels;
        
        return $this;
    }

    public function scale($scaleX, $scaleY = 0)
    {
        if (empty($scaleY)) {
            $scaleY = $scaleX;
        }

        // 组合数据
        $pixelNum = [];
        $pixelChunk = [];
        for ($i = 0; $i < $this->imagesY; $i++) {
            for ($j = 0; $j < $this->imagesX; $j++) {
                $y = floor($i / $scaleY);
                $x = floor($j / $scaleX);
                if (!isset($pixelChunk[$y][$x])) {
                    $pixelChunk[$y][$x] = 0;
                    $pixelNum[$y][$x] = 0;
                }
                $pixelChunk[$y][$x] += $this->pixels[$j][$i];
                $pixelNum[$y][$x]++;
            }
        }

        // 求平均值，表示最后的灰度值
        foreach ($pixelChunk as $y => $pixels) {
            foreach ($pixels as $x => $pixel) {
                $pixelChunk[$y][$x] = intval($pixel / $pixelNum[$y][$x]);
            }
        }
        
        $this->pixelsCache = $pixelChunk;
        unset($pixelChunk, $pixelNum);
        
        return $this;
    }

    public function out()
    {
        return $this->pixelsCache;
    }

    public function grayGap()
    {
        return intval($this->grayMax - $this->grayMin);
    }

    public function grayMin()
    {
        return intval($this->grayMin);
    }

    public function grayMax()
    {
        return intval($this->grayMax);
    }
    protected function rgb2Gray($r, $g, $b)
    {
        return intval($r * 0.228 + $g * 0.587 + $b * 0.114);
    }
}
