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
 * @Author 燕睿涛<ritoyan@163.com>
 * @Date
 * @Desc
 */
namespace Aizuyan\Image2Ascii\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Aizuyan\Image2Ascii\Image2Ascii;

class Img2AsciiCmd extends Command
{
    protected function configure()
    {
        $this->setName("img2ascii")
            ->setDescription("image convert to ascii")
            ->addArgument("target", InputArgument::REQUIRED, "Where is the target you convert to ascii")
            ->addOption(
                "scale",
                "s",
                InputOption::VALUE_REQUIRED,
                "The scale ratio of image to ascii",
                "5"
            )->addOption(
                "scalex",
                "x",
                InputOption::VALUE_OPTIONAL,
                'The scale ratio of width'
            )->addOption(
                "scaley",
                "y",
                InputOption::VALUE_OPTIONAL,
                'The scale ratio of height'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $image = $input->getArgument('target');
        $scale = intval($input->getOption("scale"));
        $scalex = intval($input->getOption("scalex"));
        $scaley = intval($input->getOption("scaley"));
        $scalex = $scalex ? $scalex : $scale;
        $scaley = $scaley ? $scaley : $scale * 2;
		if (!file_exists($image)) {
            $output->writeln("<error>Could not find target {$image}</error>");
            return 0;
        }
        if ($scalex <= 0) {
            $output->writeln("<error>Scale ratio of width[{$scalex}] should be bigger than 0</error>");
            return 0;
        }
        if ($scaley <= 0) {
            $output->writeln("<error>Scale ratio of height[{$scaley}] should be bigger than 0</error>");
            return 0;
        }
        
		$app = new Image2Ascii($image);
        $ascii = $app->createImage()->createPixel()->scale($scalex, $scaley)->out();
        $output->writeln("<info>{$ascii}</info>");
        return 0;
    }
}

