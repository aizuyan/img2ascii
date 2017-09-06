###
这是个小工具，将图片转换为assic字符

使用：

`-s` 指定缩放比例
`-x` 指定宽度缩放比例，覆盖`-s`
`-y` 指定高度缩放比例，覆盖`-s`

```
bin/img2ascii path/to/img -s 10
bin/img2ascii path/to/img -s 10 -x 5
bin/img2ascii path/to/img -s 10 -y 20
```

向下面这样

![🐶](https://github.com/aizuyan/img2ascii/blob/master/test/dog.png)

```
nmnM9@B0M08BB08@mmmM9q98@@0809MMmNB000M8BB8Nnrtttn
MBMNN9BN0B9n9Mns7i:i i :   :i iriipM@9N9mmpqptronn
qMnopon9nrvr:  . ... ...   :  ,,  ,   :vtsqsM09Nnm
n0Mrommri ..  .     .. ..   ii ir:r   :  :rrptnm98
08880p:.. ..  .. ...  .   ,:isrviiii7riv;  , ,:iit
B@8@n:.  .     . .  ....    ::irsrtqprsvri: i  i :
0B@7,,.. . .  .. . ,  , ,,  ,:ivoooorporsqoivviriv
90  .   ..   . ,,,, ,, ,,,,, :ivmmnntosnmmnmnnnmmM
n  .,    ., ,, ,, , ,,  , , ,:ivm9mnmmmmN9MMNNN000
ni  ,,  i  ,,,,,       ii: i  ii0N9N9090090908888@
9i  ii:r7    ..   irrr:rqririir70BB900B9N9M0@B8880
M0oi:ir,. ..  .....  ii:::::::rrm8089MMnos808B0B80
M99nii;. iiiprr: ,,,  :  ,  ::ii7pnms7iiipN0808088
90Nmqo ,n80B9Nr , ,,,  ,   ::  ii:i  i;riir09BBBMN
0mmss;.,r9BNn7i:: ,, ::  ::: ii i   rr:iivqnM9momN
0N0toi :iprtsri:::::::::::    i i i ::i:riiqmN9oo7
8Nm0Mnvivir77ri i ii i ii i irr  rir:r::: riv7tvii
iiiiri7vvvr :: i ri: i i:i:r: r  ii i r:ir;:rr iiv
riiiiiiiviririv    i i  rrii: iiii i i i :rr:::rri
ii7ii7ivrri:ivir :i i  i i   ii i i i  i  i  : ii:
```


![美女](https://github.com/aizuyan/img2ascii/blob/master/test/ly.jpeg)

```
 iii i  i      i ii i  ii ii i ii iiiiii  i ii  iiiii ii i  i  ii   i       ii   iii     i    ii   i  ii i  ii i    ii
i   iiii iiii  iiiiii ii iiii i  ii i i iii i  iiiii  i    i  i  ii i i i ii i  ii iiii     i iiiii i    i  iii ii   i   ii
: ::::::::::::: i i i      ii  i    i  i iii  ii ii    ii ii   ii  i ii i iiiii i ii i   ii i iiiii i i iiii iiii    iii i
.       ::::::::::::::::::::::::::::::::::::::::i   i ii iiiii  i i    ii i i ii  i ii  iiiii     ii  ii      ii     iiii  i
   .  ..  , :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::   i  iii
   ..   . .   ,  , :     :,,   :::    : :: ::::: ::::::    : : :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
  .   .   .  ....  .  . .  .  ..  ,,   ,..    ,, ,,, ,: : ::  : :  :    :::  : :: ::: : :::::  : :   :: ::::: ::::::::::::::
            .  .. . . .         ..    . .    .          .  . ,  ,   ::: : ::::  :   : :     : :::::: :  : :::  : : :: : :  :
     ..             ..        . . .  .. .       .  ..   .. . . .  . .....      .. ....  .  .   ,, ,,,    ,  ,,,   ,,,
                    . .        .. . ..  . .  . .. .. .     .    ..   .. ...   .    .  .  ..  ....  ...... .. .. ,   ,,  , ,
,   ,, , ,,  , ,,  ... .     .,,,..,  ,. ....     . . .. .      .   ... .        .    .  . ..          .  .  .  . . .   .  .
:::i  ii::::::  ::::  :  ,:  ,  ,,      ,  ,   ,..      .. .  . .. ..  ..  . ,,...  ..  . .   ..  .  ... .... .    . . ...
   i  ii   iii i  i:i:::::::::::   , , , ,,    , ,, .       . ............  , r.  ,,       ,  ,, ,.     ,. ....... .
     ,  ,,,,:: ::::::::::i   ii   ii ::::::::::::::      ,iv     .  .,    , 77r   ,:::   :,:::::: ,  ,  ..,,,,  ,.. .    ..
::::::  :::::::::: :: :,   ,, ,: :   ::  : : :,,: , .  .  :ii....    :::, :rpiitqviir:::: :, ,:::  ,   :   ::,:     ,,,,,
riiir:;i;r i ;r::r  :i:i i  i ii i ii  :i::::  :,  ,  .... .,r :: ,  i   rrvrrstrtr9s ,,,,,, , ,   , ,, , ,,,,,  :,: ::   :
i :i;: iiriiiiii;:i :i   iir r: r i:;::iii;i :::   , , ..   , isrpi :  ;ivtptprqoqr7:::::::: : ,,    ,  , ,     ,       ,,
:::rr ii:  :r;i:;;i:ri:iriri;iri:;;i : ; iiir ;i:: :;q  .   ..   si ,  :: iivvtrmm9t;rr:r:: i:i  ri ii  iiii  :::::::::::  ,
 :i ii  : :r:i::rrii:irir ri :r:r:i   rr irriii ::rnnirr   .   i,  ,,,, i, ,ii:in8nr rii i    i ii i    i i: :i  r r:    i
 :::i: :; r: riivii;r ri  iiii   :rii i  i osi7i pmr isnnmmmiir:,     :i ii iiiM0BBsrr  iii: i     ii i i i  i ii: ri : i
: ::iiii::i ii::ii i :::  :: ii i iiii   :vovvin8NripmMNNMM89nmsrtoq9nmtmnrnnprnNM0@mtv  ii    iiri ir  i i  i ii  :  i i
i rrr iri7ii7vi7iiivvvviivii:;; iii rr ii;v7vm99ri7rpmmmn988mm9mqrtnnotsmMntmmMN8MB08Biis ii   i     i iiii  i  i  iiii ii r
iir   ii  iirr rr: r;irr  i    i   iiii ivo7ii iiqqMMNN9M8@9tmM0ssMBpm90NB9m900B0BM8B00M0i::i i i ii  iiii  i: ii    ii iii
ii ir:::i :;rrrr i:; r i::;r   ri:   ri iri:r7iviivtnm00NNBBnnBNoM80m9m0m8MN080000M8M0B0v    i:   i:::::::::::  i   i:::: ii
:: i i i i i:::i ii iir iirri::ri i :iii  i:msvv77rrmM@mr8B0BB8NrB8MMno9M@0M8B8B80B8N@0ri  iiiiiiii iiri :i:: ::ri  iiii i
r  r  iirriii :ir;i:;r ii:ii  i:r i i    :::i  ;vvi7qrn0M08BMN9BBN900nN8N8nm88B0BM@00Bi ii    r;: i    r  ii   ii    ii iiii
rr;r i:rvri ;:riii:rr  i   i :; ririiii   :: i i iirnmrNBB0N@N8MN009m880@BB8@0B@B0@BBq i i   i i    i   ii ri riiii ii r
ii viiir;r::;iir  vii;;virrivri;;:rr:; r:i::rr:r i irvipn9B@9880o8@MMB0980N80B008BB0tvii i i    i:: i ii:  ii  i     : :::ii
 i  i riii i:::i  i iii :: :  :i: ii    :riii r r:riipooqn80BNn9B80B8B0B08B0088B@0m9i7iiii iiiirri::rr;:  r;r rirr;ir: rr:ir
 ::::: ii:irr::;iv i;iiiiii7iiiiivi7iriiiiiviv7iriirronrrmn9N8800NMBn8@M8B0BB8808i7pr::i ii vi:: ; ; ;:r r::iir: iiiiii i i
riivv77rvivr7ii7iiiriiii7i7iiriiiviiirriiiirii;;:iirotmrpomNN08nB9M8mMn8B00MN0B8@ri7iriiii:rrri:;ii ii i ::::i: :::::i : i
viii7vi7v7ii7iiiiviviiirii;rii;i i rr ri:  :ii  ::ir7m9ovqopopin9n8MB@8B8B8008BBNriri i    iii  ii  : ::  i iir ;rviiiriiirv
irvriiivr ::: rrr i i : i i::: iii i:   i:::  i  :iirm0qs7tivi7in8090808B0@0N0@Bo  i  i i  ii ii :i :irivivriiivrvrvivirir;;
ii  :i: ::   i:::: ii  :i  i : i r:i  i:iirri: r r:::oBp7i7viit8B0B80B80BB0Mp7insirvrriiiiiivvrivirviviiivrvviririirirv:;rr:
:iii i  i  ii  iiii;i;:rr   ; ::i;;r;:r ;:r ri;vrririm0@pii:i7ivqN8B@B888B80rmrt9i  rr; r i:ii :::i:r:;ii :  r r::;rri:ri::
i::vrivii;viviiiiiiiviiiiriiiiiiiiiivviirirrr q0BnrpoM8BrirsiqmsmN80808@BN0tqnomBp:r  ii    i   iririivviiiii ;i:r ;:;r :i i
viiviirirviiiiiiiiiiiviiirriivrriiiivr::;i:r:vB0@08@Mm809qpB0@mm0B00@0BB8nsivM0M8Ni    ii:   :rriiirrr;vii:;; ;iri ::r i:
irriiiiiiriiirviviiviiiir   ;r;: :; rii r;;:r888@BB00NBB80B0MnnMr0@@00@00@opnNmN90 :   r;:iri:ri::: ::r  ii:i ri:r; ::;r;i;r
viiirviri;;:i :r;r:rr i: i;i ri: rr:r  r:i r08B08B8BBm0@88@qpmn0880B8B890BMms9900p;ii; ;ii r: iv ;r:::r ir;;;ri:;r:ii;iiiiii
iviiriiiirriiv; rr;:ir i:i;::   r::riii :::m8B@88@B80800oMnnmpi00080B@nrB@8ssmmM0qiiirrr:i ;riri:rir   :irrr :rir: ; :;:rir
vrviiviiiiiirririiii:iirrii; ;ri ;rrrrri ii@988B088B88nmqqBM8rm80M000B8B@B0B09B08nir :rir:iirrriii:ri  : i    ; :i  i :i: ii
iiiiivrviriirrr:::iri r ri; rrri::rir :riiM0B088@@080BntN@m900NB80@0B0B008M8908B@@; :ii:iir : :rrir  :  ;rii;:: i;; ;r; iiir
iviirviiviiiivirr::; i  ;r::;;   rr i iiir000808@B9008nmN8988@nBB0B00B9B88mM9080M9pi :    i i  rr::i :iri:::::i:;iir::i:iiii
vi rr ;r:::i;:;;; :r:  iiiri  iiiiii i iitB88@B8BM0BB0m99BB00m7qnN800@80@Brrn00B8Bor: ;:r:::::   r;i rri:rrr ; ;r ii   ; ir;
i;i:: irrrr;:;: ;ir riirr ir:i    rr r   90@BB080@B888nNt988MBB0B0BB0N0008n0B88B0@ir i:ii :i: :ir:r   r:i rr  :i ii:ir i;iii
vii;iiiiiirvi ::r;i :; r :rr ;riii:;r  ii0B0@@0B000@00BB8N0NNN8BB8B0@B800BN00B880@v; iri:iri;r:r::r ii :;ir:::ii  irr   r:ii
ii :v;ir :; ir;i;r i ::i: i ;r;;r::;;rirrB@8@800BB@00B8B08BB8008BB0B8BMB@8n@@000B8vr::ri i r r i;ii;    ;r:r i ;i  ::ir:r; :
riii; ;i r vi r;;: r::;;:rii r ;: ; ;;:ipB8@0@B08B8B@00BB08B0000B@@0BBB0B@9BB08B8Bm ri ii;;rir:r ::;:;i;i;r r:r;;:  r;::  :;
```

![美女](https://github.com/aizuyan/img2ascii/blob/master/test/mn.jpg)
```
: iiii:iiiiiqsmM9M@9qtossrntNMmnnM900B@BBB0@8BB@0@BMprpontpp
 :i r :iirrrm0@8NMBnttptponm0Mnmmnn@B880@@888BB8BBB8nsqorpor
:ri:i r:iiiisqnmno9mopsqsqonnnnnnmN8088808B8B@B080B8svi7tsqs
iii ii ir:;7tmnMMmMmotr7rvrmM0B88Mn9B8B@88@8@B@8B@B8tppsnnmr
   i iii:rirqspmrrmntqppptoNnM9ioqnN08B0888BBB08B0MNsiiiirr7
::::::i  i:isnMM0n9nstipM0BMri ,  ,  rNB000B88@080B@ppsrorqo
::: ::: iii ittqrtnnstpBB8ni,  ... ,, i9880800080nmmiriivrii
:        i :vnn00mMnptM808i  ,   .. ,: t9NMB0000BB80prvrv7sv
, ,,  ,:i i irqsotqnps80Bq ,,,,::   ::iiM000088BN0mntv7i7vri
 ,   ,,:::: imn0Mmmtsnrrn7,   r    , vii8NN8B88808NMiiivivrr
 ,, ,,,:::: iv7orqrNstr i , .      ,   :09B000809MMNr77i7iii
,,  ,   ::: 7nmn9rnmqoqi ,,, ... , : . i888@0@0B00mnri;rr;7i
,   ,  , ::  iiooqn0rm0Mii:,,,.. ,, : :t00@0N0080NMNpiivii v
, ,,     : :vnmn9snmpm98Mmri,, .   :  iM00BBB88B0ntpv ir :r 
 ,,    , :::rrpsopmMpM0@08ri7;: ..   vB9nm0BN808M0mmtvivivi 
          :::mnmntm9rsq0r;::  iii;rtB80B0npm88B8mrooi;  : rr
,           iiitpomNni    . ...  rv8000900B0N8000009svi:;ivr
,   ,, ,    rmmmmqnmm0N: . ..   ,: 008MmB8B0N88Mmrporv;r:rr;
      , , , iiqtsppmt;  : ....   ,, iqnp008008800mmqi;   ;vi
  ,       , :qnii,..,  ,,, ,,....   ,:rr9B00nimNnmrtsiiiii r
.    ..      ri   ...  ..   ,,.. .  ,, 7n08BMi Bmmprvrr :;i;
   .. . , ,  p,,..  .....    , . .  ..irinB0Bsio09Nmpii;;;ir
.. . .. ,  , mi,   . ... .    ,...  ..:n9rvq@8pimtsrr r::::i
..  ...,, ,, tpi,,. ..  . ..  .  ... ..i0,   p@nn00Mntviirir
.  .. .  , ,in0ni ,, .. ...    ,, .. ,. ii  ::vm8nsrii r;:v 
  .. . .  ,  rtmmi ,,.....  . .   .  .  ...    ,7Bnmp7v: iir
.  ...  ,  , mMM9m i: ..  ....   ,..   ,.... .   snoii  r:r 
.......  ,  iimnmmq    , ..    ., . .    .    ..,rnrrii:::i:
.   . . ,,,  m00Mm0i::i:,,  ..  . .    ,,...   .,qmmt7i  rri
..   .  ,,, ip999n90i   ,:,,,,. .. ... . ..   . imqp7;ir:ir 
. .. ...  , iq990n99r,. ..  :       . . , ..    0imMmsirvit7
  .... ., ,,ipN0M0900i   ..  ,i:   , ..     .  7v:iii rr rvi
     ...     p0M9mMN09 . .   , ,:: ,,,,, ,.  . ii,rBMoq7ivtr
 . ....., ,, s08009@0No,.   .. . ,, :::   .   ,i:,:rir :;ivi
 ....    , ,ipNMNn0M9N9 .    ...   .  ,, . . . i   :mviir:ir
... . ..,,, ir0NM9N@@88i .      . .  ...  .   .:    7iir ii:
 ...  .    , in99n9NN09v ..       .  . .. . .:i,, , pii rivr
..      , , ioBB80M0@BN,.. . .. .       . .  ,i,   io7iiiiii
   .. .  , , iNNMnNMNN: .    ...  .  ... . .  ,   ,isrr ;iri
 ....  .   , t088N08B;.  ....  .   .  ...  .  ,   :tmrq7iro7
 ...  . ,,   v9NNMMBn,.... ..  . ......     , .. ,:oi: ;riv:
..  .  . ,  ii000999 ,. ..   .      .  ..    ,..  immssvqvpi
 ..   ..  ,,:i009N9M,  ..  ..       .. .... ,   ,,rq7: irioi
. .  . .,,  :iN9NN9r.        .   .  .  ..   .., , sm9priirri
...  .  ,    v80B0v    .  ..  .  ..    ..  ..   , r7v:ririqi
.  . .. ,,,, r0MM7 ,.... ...     .  :::::  ,      7oprsviir 
.. ..  .,, , :00B  . . .     ...      ,  ,.    , ,iiir iirii
 , .... ,,,,::09i,,.  .  .   . . : ,     , ,, ,   ::irri ;r:
 ,, .  .   ,  qs  .. . .  .        , ::   ::: :    : iivi7p7
,  ,,  .   ,  Nr       .  .. . .  , :: :: : : , ., vi:iir ii
  , , , , ,,: 0i,..   . .. .   ,   :::  ::: : ...,:t7v7irsp7
,  ,    ,,  :rmv  ....     .   ., ,,, ,, ....  . . po7rriior
 ,,    ,,   ::ir    ,     ..    .  .      . .. .   rnppptspr
  ,, ,  , :::: i.,....      . .   . ... .... .  ..  iiirivsq
```

```
|j+;;``-;.--l*}{v1|]aX9M900800B80DD808N99900M9NN89M@g08088888QQNNN$W@W&@@M$$&$N&$MM@M@M@NOQDggMNMMNN08BBN0NN
+=;::-.-`-.:/1?7l|<}kC9MMBgOQQQBgM899MM000MN0NMMRM8QOR8B088@80BB@W@&N&&&&$&MM@WW@@NW&DB8RgOBORMN0NM0MM0MN8N0
,;,-`:;..:::/</jj1I?yP8BQB88Qm8DB@BNN09NN99M00M9mBBBQg88@@0@B88D@$&$@$NWW@&MORNOR$&&@$&N&&@N&@@NM990NN90M8M0
.-,--..--,:,<|t1Itj+sZ8mQ8DgRO880NmNMN9M09p00N90RBBD8B8B@0@8BB8DO&W@NN@NM@W&WNNNM&N@WNWM&@W@MN0M09M0XU0C%8A4
,:`.:``,-.,`|*l//+j*ca90N@@0BB@0NDO9990N9NNMpqNMQ8@@08888B08080R8&W&WNW&NWMW$NWN$WNM@NNMWDDQBB0AP4A332he20P5
:;..-:`.^^~`-t>l||I=xk0N%MMB0@0N@Dg09900090NEEC9@0N08BB@BQB0BBmm&&NMMWM$&$M@N&@@MN&M@NOODB8DmRMMN08B8BBDOBRO
i!~r"!!rr~i~:*===j||fu@B0ORQOg000gON0NpZPP4444CpR08mBW&NM@Rg80B08BMMWWMWW$&@W@@N8$NWN&W$@W$$$@NEEp0NNM00MN%p
!^!r~^ir!__r,<>t=++t>x0B80@BB0880ORNEqZ5P4eaa50M88B0gMN0gMWmBDBQQQBDQg&N@W$NmBM$WWNN&@NN$&QRRD9UqpUPaZ3h3MkY
_~"^!"^^_, !:;:|--;>/z5%Zq000MNN0BRM9N09M00N00N@@D8008Op`?24XN0BD&Q8QDQN$&$NWDM@gW&&$WRDgB@B80qYusocxc]JJ0{7
,,, ,  , ,  ".,:`.,.>vE9NB@0@0B0BgQ90MM90%5M0BQBWMmBe1, ,    ,  ~-kB8N&OB$NMRDW@B@&WB@$88QgDDD4k0MN9MN099B00
, ,  ,    ,,":-;:`:`I+N8QRDOBB00BgR9UqZe2e0Q@M&&m9>,   , . .  ,, , ,|0QWmDM@BD&@8MN&g$&MM8R8B8MZ%90ph44Vk4Y[
 ,  , ,,,, ,,_~-`^^-*+50MMM99N0N9BDN5P2220&N@&Mgu" ,  ,. . ...,,  ,,,-gOQB8NBRNWWNMW&RQg80000MPcz]x]?JT7cM]{
,,,,,, ,,,  ,__^^r_!|+YnJ2EqN00M9Bg89NM00$MNW$m0| ,  , .  .    ,  ,  ,zBgOBROm@@gNWN&&8gO0888BV?711tIIjl19I=
, ,  ,, ,,   _r"!r^_.=08@DDmgO8808g9U9qERWWW$MOp,,      ,.   . . ,, ,,`QQBB8mg$$QM$WOMWM$MNW@&h{{}xxvYae2MXq
,   , ,,, ,,  !""_ir`t5B8@808899@8mMqpE@&MWN&WB-,   ,,  _"", .  ,.;j+>]@888DmO@OQ$MNRMNN$OORR809M9%4eEUZ2Vkk
,,,,, ,,, ,  , ,,i_";t?c{YZ4C%42UNBN0MMQWM@&M@1, ,   ,    ,    ,,,,,, "BDgO0QQ&$MNWNMmR0888999VzTvff*}f?=F+t
    , , ,      ,,,, ;lzEA%0NBBMMBBBN9N8MmO@MD9`,   ,vJ99ti,,  .  iu9jMPqD@DDORM$B$NMMWN&N&N&MmPj>=t1j+|l|M+l
      ,      ,,,,   r1Cg8B8QgRBBB8R9ZN00=4359Z    ,  ,,    ,, .  ,!,,>/!Bm8QBON&Q$@WRMmRR888B0]I+|tl><I<tk|l
,  ,   ,,, , ,   ,, ^:lEN099N0NM9BmMUU08_ ~*>I,, ,  . .  ..  ,, , ,,  , 9@@BmgRD8ggODgDgRDBgRB00NEA2FZA5[yns
,   , ,  , ,,,   ,,,r:>}11seP4A50NQ0990Az    !,       .   . ,, .     ,  @MOQmOR$R$MN$NOBDRQOO82?77=l<j|t|I|1
 ,   , ,   ,    ,,  ".}08BO0gQ8088B9pNM89I,,, , , ,, .   ..    ,` .. ,,:$$W@@RW&OWWN@MNmBR8@B8F<j><l1|I|10|+
     ,     ,  ,,, ,,,:10B88888@M08gM4988B8a   -      ,  . . . ., ,   ,i0g&mN&M&M8@@&@B08BN990M7|<1=+;Ill:y.`
      ,    ,  ,     ,!;Ij}YaeZha00DB9N0g@ORg5.Y ,, ,, .. ..  ,,,^  ,, ImD@QMNgDBB8O88RRDmRB8m8MMpVY]I*t7<||=
 ,       ,,,,,,  ,, ,!|09M88000N0080@MN88mD8g0ys, ,,   ,.  ! ,  :^   ;BO8&WMWN@&MNM@N&NgRgRDQBa=||/>==t+l+=t
      , ,      , , , ^*@0BB88B0MB8ON0MB0B8QDmgBhqi      ,..,, ,     !qW08Dg&&MW$R@M&gD8809M0U0}*<+j=>I<>=9>/
     ,  ,,,,  , ,,  , -eZp009NN98BQ0X988BBgNB089uC9<,,,     .   , ,_N&M@880RMgM&8@M$mQB0@0M9ME{1t1*=:+=/|4t;
, ,  , ,       , , , ,,xs3XN9M9q@0O8B08Q@WNM&NWB8tjzM4I^,,,. .  ,,+RM&MMMB00RBm80mg8gOmDBDDQRO899qAFjIv7/*l?
 ,  , ,       ,, ,,  ,-BO8@88B800@Q0N0RNNM&@DD5l-", ,!{PEz>:~^",Eg&MMNNB9B8UEM88mM@MOB@9MNMpXZ?><*=1,IjtI*|I
 ,    , , ,, , ,, ,, _`NM088@00N0BmBN8,,,|@, , ,  , ...,t7]TxCN8W&MWM@M8mg&D998DmNWWQ8089M9X%47>lj*l>/|110|>
 ,    ,,,  ,, ,,,  ,,!`j1=Tnaea3MBDB88: ,  r, ,       ..,,-/>zVRN&$Q@MWg&M&WgOBOgWWM8NRQgR0B8@F=<*|+`;`->Z1-
  ,  , ,,   , ,,  ,,  ,0090080@U000BBQ@8y   .   ...   .  , ,r;I8$MNODBB@$$@MN@mm0QQDQg8QORR8BDD0904slv?}{z7v
       ,  ,           :9800BB0BNB8@0BD$$NA  . ..   .  .       ^8Q$WgQ88MQW@WNMm8mN&$mOBNM9X%0C<t|jI|`+*I,:-I
 , ,,  ,    ,  ,,, ,  "=oPMM9M0E0800@@$Bv `^  . . .   . ..    ,vMN8Rg@M00mNMNMWDQ$WWW@mg08B@M9]**+=j:-+I<Pll
 ,               ,,, ,"npMB@BB09@08O0c",_  ,       .  ...   ,,,,:fxs989N0mW@&@MDQ@M@g$g08@NMN9x=*/-``;,;<qt<
,     , ,,,    ,,   , -08B8@@9]i ,,    ,       ,  ,  .      .  ,   >I5E90@N&MMNDNB0888mBgROmO8B0NCsf//}{jk=v
 ,    ,,  ,      ,   ,!o0NMf,,..      ..  ,      , ,,..   .         !o25OgWWMMMDN`:BRm8B9099X01+j:*,,;:<--;/
 ,  ,,   ,  .     ,  ,i|1z  . ... . .    ..  .    ,,  ... .. . .., ,, y30RM@MNMg0/ ,8@Q0@0B0M9u>I*.,`-/*l2j/
 ,,     .  ..   ,    ,i0B+ , ..    ...  ...  ..    , , . .          ,.N24D8QM&N@84! /D00N9%5eV7l+,,`;`:,=pl`
.. ,,...  . . ,,      iE0,  ..... . .  .. . ..... . ., . . ...   .   a8Z}90g$&W&Q0{, BRBRDDRD88NM04x<1+l/4<I
  .  . . ...       ,,,~<k    .....  .. . .. .  .  . . ,  .  . .   ,.,0Ok08@0R8@W@R9>,VBBB00@083*+t-;^`.-.,-`
  .. . .   .  ,,,  , ,_X85,  , . . . . ... ..    .....,,. .  ..  ,. ,NQNmgV.=qBDNW@B+;0NNNpPZa+:;-;.,;:;:7..
  . .    .. . , ,,,    UR@* ,, ,   ...      . .,.... . ,  ..  ..  .,.i08@9 ,,,,-8W$88?0B8009MEe?*11<=>+*<Mtt
  ...  ... .  ,,,, ,  rvMM8/ ,, ,,   .  . .  .  ... ..   ,. .   .   .. 8R},. . . cQMgB0BBO8BmBOBB@M[1}v}?C]?
.  .        .      , ,"v9Bgm?,,   ,.  . ....   .. . .. .    .. .    ...!8O,,..    !NODROBMM9NMuj==/j;|+t1Ij+
.  ..   ......    , ,,,hROQROhi,   , .   . ..   ... ...   , . .. .    ., ,jqM2T<",,`>0ggD0XC2e}=/tj=`|1>jpI+
 .   ..   . .  ,,,,, ,ix80@08@]i^, ,  .. ...   ..  ..   .   ,   .. ., ,.,. .,.,  ,,   2DNg000Mytl1>I;,,,>Z+:
 . . . . .   .   ,    ,*]9B@B0D|!;_    ... ..    ..   ..   , . .....      .. . ....  . ;B$DmQ8m@903+>/I+tT<+
 ..... ...   .,  ,   ,,[8gB8RRR8,^,,, , ...   .  . . . ..  ,,  . .. .  ... .      . ...,z8BNNCl/t;:,`:;.`=/=
 ....   .  . .  ,   ,  =8BBBBB0B@~,r;^  ,, .    . . ...  ., ,..  .. . ,, ....    .     ,,BB9pP?|*.`:;;``;j:-
 . . . .. . ..   ,,    ,P0088@BMB0",,;`i  ,, . ..... .. ..     .   ..     .  .           090MXY><`,.,`.-,M>:
 .  .  ..  ..     ,,  ,I0BmD8RD8B8h   ~`,, ,    . . .   ..        ... ,     . ... ..  . rB88gO889M%c*11t>X<|
.   .........    ,,  ,,<OBO8B808BBD- ,, !~, ,,   .   .. . .,       ..  ,  . .,  ...    ,Z@M000x<t<;-;+I/>7+1
 ... .. .. .. , ,  , ,,|N@B0@@BB0gO8_   ,     ,,    .   ..      .  .   ,  . . .   .. , .B8MNMMF|1:-.;:;:,?=;
....   . . ...   ,,,,,,*M@QgRgOB0QBgM  . .     ,   ,      ..  .. ..   .    , .. . . ,  R0p99A3{|tl1::--`jM+|
 .   . ..      , , ,,, /8RRDmO0B@m8DB^,    , ., ~,,,,,,, ,  . .  . ...  ,,...   .  , ,M80IO8Omm8890hfccv701j
. . .  .     .  ,,, ,,,I0BBm8mBB@RRQDN ,,   ..   ^i,^   ,    .. .     .  , . . . .   :88?iyNMNPv/1I}}]V4U9NM
     ..... . .  ,,,   ,-00ODgRm00OR&Qg* ... . .       ,,,,,  ,,     ..      ...  ..,,A8|` `kayf|I:;:`-*`t0*|
  . .   . ... ,   ,  ,"*Bm8DR8mR0QBRm8D-  . . . .. .. ^r!!  ,   ,  ...       .  . .  0y",,,9NNe|<|l+>+t<lB*|
 .  . . .        ,   ,~j08gDD80000B@0009 ..   ...... ,   ,!  ,  , ,,     ,,  ...    ,P., ,,MQggR8B9ofoucz0?/
  .......... ., , ,,  _,M00B0@B0BD8$gmQR5   . . . .. ..   ,  ,,,,,  ,   ,  ,   . ., -+"    j00hF?}cJy2e%0MN0
.   . ..  . ..   ,, ,,~+0ODWBDDmm8O$WgRRB     .. . . ,    ..   ,,r   " , .. ,  ..    ,!     cyv/*=>ljI||1ht<
 . ... .. ..  ,      ,i<QmROBgOB8gOmBQQBRE .  ..    .. . . . .. ,  ,i,     . ..  .   ."  ,, `05Il1I<j<,-=%<,
...  . . ...   ,,,, ,,!/90BBB@BB0mB8DgB88B  .    .  .. . .  .  . .  ,    , . .   ..  r,,,  ,,0g889U{j><+|%+,
.  ..   ...  .     , ,^=9BDDmR800BQ@R8DgBOl, . .. . ..   .      ..  .   ,. .   .  ,,,,      ,yV<?+I+tI=Ilo/>
 . . ...... .. , ,   ,^<8BRDDDQR8RBDN$&BRRN, .... .. .  .   .. .  .       . ...    . ,, ,  , 1z<1==jI><I.|--
 ..  ....  ...,,    , _;080B8Q0B@888D8QDBgY  . .... ....      .   .  .   .  ,...,,-=, , ,,,  }4l*j.,.-/t>Zl1
.   ..  .   .   , , ,,_.M8DDOQO0@RRM$RgQm0,   .  ..  .. . . ,. . . . ...... .  .  ,l  ,  , ,,5Q0M0E]+1l*>q*;
..  . ...     ,     ,,"+08mQgB8gDQm$$@&mQt...  .. .. . .  . ....     ,.    , ,.    <     ,,  aV<}|tt*{xFu0Yo
   .. ... .  .        r`0g8mgmBB8888OQBRn .    .     .  .      .,   , .  .,..  . ,  , , ,   !Puj+t:``l|I>?-.
    . ... . ..   ,  , ":C90gB@08BDg&DDQM   ..... . .   . ... . ...   .    ..  .  , ,,      ,>0q]++/I=Ij<IN>:
   . .   . .. ,      ,^.0WNWMQmBBmQM@@Q ,.. ,.. .  .. . .. ....    . . .. . ,  .,  ,,  ,  ,,9ODRBB@UvzJ?/M*,
  .. . .. .  .     ,,,_`MgDDRDRB0mQRmW`  ..,... .         ..   .   .. .. ..   ,, ,",   ,, ,`9B9cT??czhZU0NMN
    ... . .  .      ,,i.aB08QgBB8mOgO9, ..  ..  . .. ..  .  .   . .. .  ..   ..   , .. . , =ko?>j<j/t>1><9/=
 . .  . ..  ..    ,,  ~;XD&$&g880BDMN; . ,..,.. ..  ...  .   .. ... .. .. ..  ,.   .  .. ,  00Nkx***lttIIN<>
... . .. ...     ,,   i-NmBDDgQD8gRD@  ., . .. .. . ..  ..  ... ., .    .       , ,..,    ,|DRO800NXhZ5asMI=
.  . . ...   .  ,   , ,^28088@8@B80@-,,.. ..,  .... .  .... .  ..    .  ,  . . ,          }ZZCxt|?]ykq90N8@@
..      . .....        "c88m8Dg8BRQB  , . .   . . .    . .   .. ,     .  .,. .   ,  ,,  , 9PP2z|++1tt<>I+McJ
    .   . . .. , ,   , r5D88B8R88OgM .  ,.  ....  . .   ...... .... . . ..,  ,    ,      INOR@8Ax/**1l|/*8j=
 ... ... .. ..  ,,,   ,~FOBRgBB0B8@     ,...   ..  . ...  .. . ..  .    .  , . .  . ,,, ,x0IBRRgBB893ACoY0<|
 .   . .....      ,  ,,~70DDDgmB00!,, .,  .  . . . .. ... .. .. ......    , . ... . .,  ,jqM>Aacf}]oVC0M0809
.  .  .  .  .. ,,   ,,  F&N@&W8mX~  . ,. .  ..  ....  . .. .      , .   .,  .    .  .,  ~,I00|aj*j>/*=+**NcJ
... .    ..  ..      , ,zQDDROm8:   . . . .  ..    ....    .  .    ,   ^"+2!  ,   ,. , ,,/l=N4@MN5[f+j=t=Mt/
.  . . .. ..  .,,,, , ,,j8mgDg0-,,  ,    .. .    . . .   .   "-,,r _ ,, ,, ,,         ,   a+1}O8M0X[}Y]}|0j*
   .......    . , , , , ImMM&$O,   ,   .  ....  .    .    ,,^,  ,,,,  ,     ., ,   ,..  ,,^;`|sjt<>+1{]oAN5a
     , .. . . .  ,,, ,  jD8BQgn .  ,      ... ..  .   ..,,,,; . ,     ,, ,      ,     , ,,r~ -Cj<=*=>I1t<C|+
     , ,  .    ,,   , ,,t8BOBa     ,   . .. .   .  .....   , , ,  ,,,  ,,  , ,, , ,,",, ,,,;  BNEVz?ttt</0t+
 , ,,,,,    .. ,, ,,,,, <09nv!   ,,   .. . ..   .. ...... ,i,,  ,,  ,      ,,,,,   . , ,   ,,C-BB0M0a4eu]M/=
     ,,    ,.. ,,,  ,,, t88m0, =,  . .. .. ..  . . .. . .   ,   ,,, ,     ,    ,ri_,  .  , ^,>+ t*jt7]YVq90N
 ,           ..    ,,, ,,@RA ,~ . .  .   .....  .  .. .  ,,,,, ,,    ,  , ,,,,_ir ,,  .,,    v:,,>/>1=///Nf7
        , , , .  ,,,,, ,;8RDt   ....     ... . .    .   ,. , ,   ,, ,    ,, ,,        .    /B`881,CVx<j**0>=
  , ,,  ,,,,  , ,,  ,  ,,8B0z, . ,   .... .. .  . . .....    , ,,   , ,  ,,,, ,,,,, ,   ,, ngml`NNM040M4AMc7
  ,    , ,,      ,, ,  r,BQM    .. .    . .   .  ..  .       ,,,,, , ,,  ,, ,,,  , .   ..  ,PZ[+I<l}JzeC%MMN
   ,,    ,,,,     ,,,, ,.kMP_,  . .  . . .. . ..... ...    ,,,  , ,,, , ,..      ..  . ,.   P0U]f}>lv*>>vNxY
 , ,, ,   ,    , , , , i.RDDC, . .. ,   . ...  ,  . .   .  , .   ..  ..  ..  ...    .    ., 0BQBBM0Pcf+/I@l*
  , ,,,,    , ,  ,,   ,!.0F- . .. . ,,  ..    . ..   .. .     ....    . .. ....  .. ,...,  , 0DB@M9N99M9082z
,,,,,,  ,    ,    , ,  !,,..        .. .  ..    ....  ... . .  ..   . ... .    .  .. . . .   ,uT}f}7c[2%MN09
```
