<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.2
*/error_reporting(6135);$Ic=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ic||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Dh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Dh)$$X=$Dh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©îvt2ûÇ”!ñr0œ„„£t~ΩUç'3MÄ…WÑB¶'cÕP¬:6T\rc£Aæzr_ÓWK∂\r-ºVNFS%~√c≤ŸÌ&õ\\^ r¿õ≠ÊuÇ≈é√ûÙŸã4'7k∂ËØ¬„Q‘Êhö'g\rFB\ryT7SS•P–1=«§cIË :çdî∫m>£S8LÜJÅút.M¢èä	œã`'C°º€–889§» éQÿ˝åÓ2ç#8–ê≠£íò6m˙≤Üjà¢h´<Öå∞´å9/ÎòÁ:êJÍ) Ç§\0d>!\0ZáàvÏªnÎæºo(⁄Û•…k‘7Ωès‡˘>åÓÜ!–R\"*nS˝\0@P\"¡Ëí(ã#[∂•£@gπo¸≠ízn˛9k§8Ünöô™1¥I*àÙ=Õn≤§™è∏Ë0´c(ˆ;æ√†–Ë!∞¸Î*cÏ˜>Œé¨E7DÒLJ©†1 J=”⁄ﬁ1LÇ˚?–s=#` 3\$4ÏÄ˙»u»±ÃŒzG—C YAt´?;◊Q“k&«ÔùYPøuËÂ«Ø}UaHV%G;Ésºî<A\0\\º‘P—\\¬ú&¬™ÛV¶\n£SU√tÌ≈«råÍà∆2§	l^ÌZ6òejÖ¡≠≥A∑dÛ[›s’∂àJPî™ Ûà“ùåä8Ë=ªÉò‡6#ÀÇ74*Ûü®#e»¿ﬁ!’7{∆6ìø<oÕC™9v[ñMÙ≈-`”ıkˆ>élŸ⁄¥ãÂI™ÉH⁄3èx˙Äõ‰w0t6æ√%MR%≥Ωjh⁄Bò<¥\0…AQ<P<:ö„u/§;\\>†À-πÑ àÕ¡QH\nv°L+v÷√¶Ï<Ô\rËÂv‡ˆÓπ\\*†‡…Á”¥›¢gåùnÀ©∏πT–©2Pï\r®¯ﬂã\"+z†8£†∂:#Ä Ë√Œ2ã∫J[êióÇ£®;zò˚—Ù°r 3#®Ÿâ†:„nÌ\r„ΩÉeŸpd›ç› Ë2càÍ4≤køä£\rGïÊE6_≤™ ÿﬁâbãû/å´HB%Ú0Î¢>»»hoW√nxl÷ç†ÊµÉCQ^Ä∞–‘ˇﬂÒ\rÑäæ∂4lK{˛Z∆¸:Ü–‹√Éü.¶p®ßƒÇÈJÛB-≈+Bî¥ë(ÎTÚü%ÆµJõ0™lÿT∂`+…-¡æ@B⁄·€ÑV·íƒ\0¬œCº,ÏØ0t‚‡åFáâÂ?ƒ†À\na@…å>Ç‚ZECìÙOé-Êõ§^QÄ&ﬂ÷˘)I)Æ§ƒ¿ÅRÑ]\r°î9î7_à¢\r…F80µOb˘	ÄëÓ>∫‰˝\nR˝_à—8ÊÇÿŸ´‰ov0§bCA∏F!—tóñƒÉ%0î/ëzAYO(4´ã°à®“	'ü] IÈÌ8hH¬05ò3Ú@x&nàí|T”≥≥)`ê.ìs6eYòD¶z∏åÆ•ÉJ—ìÙû.ÑÒ{GEbÅπ”ã°òãÜ2’◊{\$**˝æ@›Cêû-:zYHZIÙ‡5F]¶≤Y˙˘C™OÍAù¬⁄Û`x'¥.*9t'{ˇ(ÍöwP∂æ†—=¢*âÜ˙*¸xwrÂ‘*cÇûÃc|ÑDüì⁄Vóñ\rÜV.á0‚∆ôV§dà?“Ä¸Í,EÕù`T¶…6€à-ì≈Ïæ≈⁄éT[—ê™z©Ç.Ar±£ÕÄP¯∫nÉc=a‘9FÚnﬂ!Ÿu·ŒA©ﬁÉ0iPÛ¨îÓ∫J6e‰T]Vÿ[\rXÃ·aüñvçkı\n+Eàù·‹ï*\0∂~∂∆˘@g\"ÃNCI\$ç‡…åÉÄÍx@W√yº*vuDŸ\0ﬁvúÎåÜV\0ËV`GÁΩuµEÆ÷ï¬¡fìlòhí@Ô)0@öTï∞7ãÌ€¬ßRA Ÿ∑Ú¥3€ò–´/Q«]™,s÷{VRû±°éˆF´°èAòÑ<®v◊•Ó¥%@9Ç¿F¢’5tâ%÷+∫/¢8;æW—‰⁄«JÔ–o:÷Nˇ`¯	ïˇö¥hÏ¡{‹£ïÓ À‘ê8‘Eu™&∞W|…ÜÑâÆU˙&\r\"‘¡ªâ|-u«ÜÖNÎ∂:nc≤©fV≠ã¬ç√Ë#U20Â>\"Æ≤«>Ã`úk]Ó-Ø«x˘SÿÕá–¢©âÇÍc‚°ÛBíó}ÿ&`àÓr+E≠ì\$úyN˝å±b,Ü¥¥Wx ˛ù-9Â’r”,í¸`Â+úÔÌÀä˘íCú”)òò7€x\r¨˛WµfMåSRº\\Ëz¶ŸQ≤ÃìçîuA¨∫Í2é±ı4ÓL&ÀHi ¬µ∞≤πS\$)e≥ìÊg r»å©É\$]ZÎiYs§ı◊kWñn>µ7E1k8–d√rÛÆök¡˝¢ÎEﬁŸ€w¬wcméTyÅπïÎøaõ\$tx\rB¥˜=Åäˆ¢*î<»É†l°fÙKúëN/∂ºÅ	√l’·¸kHìı8†.ëë˘?f˜õ⁄ˇ„6Ü—áº{gi/\"‡@èñKõÒ@2„Áa|#,Z§±á	≥Òwàd¨ôì≤ÖºÂ6wô^&¡ÍtôÁúP±Ö•ƒ˘]¿ºõ.‡„⁄Ì°TÏÓkro¿âÅ˜\ro=ó%Ê◊h`:\0·±Çêˆ´î|Íä£´aì‘Æ6*:Õ”*á rO-^ñíÒÈn´ÕÛßM∆}Êª˜∆Ayaù±›\nÉu^Ïñ¿rnO\r±ª°`˛T~</∂wƒy˛}Ê:õ|£œ–˚÷Ã°6ª§◊¯ÆüvÓ\rc<∑b#˚‡ÙßÜÓñ\$˘sµÍ|ÁááV)´hãTC˘Ò(ƒΩÒ£»}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("\näÖB	ê» 7úÑ#)¥ﬁv2àe2òÄ∆l0úŒ`®\0‡a9M¢APöL\"õ!¶Sq“8 èH\$Bô–‰i7ÂÛå∂b7õÕÖÿ‡ºf:õågCIº‹ 0õÜSë1MÇ»µ\\ÊNëkí√	äT)¡@ìIòAY6Z-@êMh]å◊Ï\"ËÇÌxçX\r¶Qt0·1ôE#)úäx8\n‚ÇÒ∏\\9äD‚]vÛÇàÁrysôIö◊‚Aêû—ù¨õ¨≤°\0¸AõÕÁp¨Äu∑◊Ìg–W\rÊs>–Ïi9öLFìa§Ëyù«Á≥I¥‚uÜß*}Ñe0õ®¥zM.õO:r˘∏£IíÂk;H/∆À‡Ä»7åc´ñÖ√8 :%)ZZ!\"H»>°KÑ∫çã∫º–?´Ñ,œØaÍ˙ç®»ñ3m∞NÕ∑ÒEBK[¬ÒæêÍ2∏N2Åäp8@8*Ék“ñà≤Ç5ç#+≤ô\$i™nú»Óÿ›J§öô…NÚ8)är¢ı©\nT≤ßårä/#HŒ7+É ¬<≥+K˝MJõ˙7£∏@\"*òQÅ3ã9¿Ûƒı?@¥Ú≈5ÔÙ÷Ã¬o¸éãºƒàØ≥,ŒŒ6·⁄¸»\r(`Ê∑4RßÅN:+*ãhÚã<hbZÇÉjp™Ä‰Ë©“úíÓ…ÅRç.Ω ukTå√ÕQ[Ω·D9U√£ÓÃ#|à≈„\rcYéB˝m\\\r¡Ë`´Åå¯¸°Kj{J?– .Ëe“ïÃ∞∏+]Ê¡Ö√ò‰1ø£d<Ω·p‡9\rÔå¬˛4Ax^;·Åu≠YNÉê\\Ñå·}∂˜Ö·˝óf‘∆7 Bwª3\\‚°KËaê‰ã]C:p\$≥0— ÂYeœ|åx ÿÍß/ËN7\r·>uó&£ TÔ®Ë4hA∏ <h◊∂[|i:X—öå˘æÑÖ¡êjÜÍ´b‹i£s˛;‡Czj&å®–√0Lm;^É®ÇZ&:\nû#gÏŸﬁ≤¬éÉ5ËZ\$È≤Å6∞…æ»jñ*åìπ@◊\0A`KÎxÀøY”rÈ≥t]&&õÊJ|<_√\0ß`X&°S>Ümò}±’åÌwM”‹Å|:zÇ˚ã*ñ‡z¡XRÖ⁄ò 1´=T‚0œù:⁄∑¯˛O	”⁄6õ%ﬂb6◊ö˜„¨Ô¬4aàªp˚´£â”˛‡H˙Æ ç\0ü∫é]h ÇT§b2L\\ßÊ„jhÑ6 ˆDãQ±»ËË¸ÜƒfBrÄ%E-]BLJ :@\0Ú=pËàA\nÑ‡8X^N—y‰;â,Ô´Û⁄ËaiK\n≈EÇàÇÈKõﬂ\0Ü#ØíµÉ(d	-©©∏HrS‚lFhM˚ºXèOÏM\rÈ`˜á0∑b¸RäÅ‡.°8Æ[‚4O)qEáC∫°≥q—hàá¿¯ZCË)_(1ñ‘äAÕ¥ièqàõ˘T√¬ŒTäò,uT¸OR\0Ä4í†M\$\$Üå—πÇd`¿P #ßhôíRNº©ïi\"•b√©!MMÅ∑π,âÑo<¡≤YC‰º{‰¿s\nçÃ∏…H÷{≈!âÕ:ÇcåÅí∆ILL˜r\nA#û·•zÄòﬁCqS&®jgö0©Q∏ ÉiÌB¶àà€¡÷jŒPÜi&ÙßH“®òJ¬G+°B\n%‘û%Ex»Yçó'Í^)ÈC#}ñ∂bû…é∞ß©-ôaûf–Ê≥√º\"%¡∫∑pBt)%ô‡•¬£˙]©t	¡Ω≈ƒ\\Å—Å˚ís≈§íı√\\`7pñÑE8k®R\\áÛ õA:ê\\&â˙&«ˆú”¥jâ¥Â*%L™ï‡PMçUGu\$29‚˛÷Î\\QOë(ªbH€±˚’ÿ9–∂µY¯'¥∂ΩW ˝`eÇbe(Í÷≤‰P 	Ëê–‹õüÆÏ9üï3\0îÖúòÖ“∫◊z˛TlH]±d\\4÷¥˜O†…«P˛\$⁄îHPoÑ1»©ês¨CH‹≥;iU^–Yiq!ÌX1bﬁ0ﬁRC¢Öq0›û††HÅ¥6]\"∏≤ÆzØC»}ú|mÊ·∞∫™º—@„bP/Å˜û {röp^ÕQ∑Q&∏◊.3ı\r!µô/∂Åv@Z6 L>Ãê\$\nvà¢Õ¬ÊBíZ–e#4»7T˘À_{≈\r'ıï…àW&1.	ƒ®ú¥ı4A[“xx´≥åaS„0iç•≠‘!{:C </à|9áPƒ¨É£¬.e”)Õú`/∑ÇËd≥n∑ﬁÎ˜8ñƒâW\0÷T,ÏöHe˜•fdﬂ•1a©êûßCl	fπèJèî˚\rU≠u_Œ&¨À∏Ç¨-õÕX}	‚ÄQäñˆ7≈Úh9„2XÒ¥ò«.%P)“‹néîyP*h–•¿‘v™µV nÖulQBe“™Êb·™≤a8gxçôÌA\r·ﬁÃìàW)17`Ùj‹≤Åˆ|πtõdÎÙˆÈû.»%Z#@DÉÒ\0yƒEÑ…m†Àâ»N)¿˙GÕ©∂Ù∂5\rﬂMº8îÃ°ñ3;;dÇÉ0iûûüù{õ Íƒ.Xu>S;e[üﬁ	™‘-PRáqò= ß)t—œ5n¿’ã…∂ï∆öcyÇ\0’ΩxP	÷µ_êÖ∞’jßÚ∑êLÍJˆßIØ4ÇØ’¸Ê-y%©JÃƒ–ÔMKÆáõI–ÿnÉ´nñÖ?g˜n©;B∞èQBuæ§eß>ˇë°kÂz∏‘84é≠µ∏Ñ[3FèõÀ…Õ¡ß8P,ÊIÛØñ=\$ëÁì!*:Ì)I_\\Æõ]ı¸Q§∫õl≠bAŸ o–◊W◊Ωá¨∆ç›:?u‚‹Wª¥¶Ò‰õ”e=:ÀßV°–¸C∆WùE©<{„Ò¯ÁYÛÈÕ‡Smùô[¬ªkusî&‹ı\0Â(Á|¸†í£”`Î·â˜ıØ¶UL≤UæŸHR∆Üµük+Z¸û?\0BﬁvG0ç–˛X˙·r…êGBÁ3¬ˆBoõÿ\nôfb@Ô¥%§¯•#®•j^ôIò–@N¨.»àî¶+cn‹¿¯ ¯ †¯í	H]Ã\n’\nËB£Æ…@BCÌZ(®|on<C»÷gÙ»Ö†Ã–P˚\rtÇ∆Ï∞`¸c˙†ÿPj»è˙ØJr√mfâ@B+K≤ Ü&¿ÿptXP8s‰äÇ´2D\$F≥&û\".èØ^Bè*Ê.rÇémNgÜX-Ô∆¶≠`˜C˚⁄ÎØw*)–tı–Í±è≤Äƒ*≠m		&x¢Ø‰8I(\ndB¿Ë∞û˜*ë4!@⁄ó\"ò0‚\"àÊò\n\$oäØétë4†»LÔzŒÈTòÕß‡ﬁh\rpênYå.œ p∫◊läteÿqÄñ•VØ(óo ÔÀèt‘§:/±h·xØC1ëCjv3ä‚Ê—¢7‚lFg∫«åÄ´å*§P&¨≤ÅŒÆ‚lBnlFúlz„1†Ãƒ¨/†Cq≤÷n6Û≠\$›Ã™‰M.”,pÙ∞al?±˙’p],é†LóÑ+∞`»≠Z;–T-åè\"˙Ò\\÷ê¸™Ï™~∞æ{∆Œ ≤ÍoÀ\$ã«–«R*âR&'2* ƒ]¿◊#rB|ë‰h\"˚Æ¬tÚnÁ£Ü?e\0xqÏ’“∂\rz˜§Ç°Ñüt*üoîπJπ\0@)\$FüƒË „‚&Ñujx\"2∫¿‹I¯8O\nt	êª¥ªãºìã∂./–Œ®]KC\$ÄÎ\$#\r*∞ﬁ∆ŒfÎ∏À“∞≤¥ÆMPß∆ßR¬¬pb2òCÚ…,¿‡g ≤Ñ\"..”*ì.πÃ«) @∂f‘î“¬Gf‹:√ﬁÑ¨6X)ÔO™XIÓ†°5\$ø/¢Êx†‡mÃXBp6äY!«jtbõ¿¶:FÄöá7†ÊˆëpçÛú˜â‰\rÍ:–≤îÆîB#‰\r*™<ñ˘@∑±>Hâ-*¶§Ê±Z\0–!ÄÃ+ìº,B¸tëdl,\0úÍ-\nÛ?Áá>33å∑>ØÃ/†c†N”Í}¢ﬂA\0Zƒº‰N{ßbv`‹‘-¬˚C≤êT©(á#V∑‡⁄ÿ¢û@`ÍÓÍRà¯¿ ˘ëCEÄûV KP	.i>ˇƒ\0ÍÁ\$p§Ä¬5P0üÉ“xJÚ&&¿Ãª\0ô0ÑÇ3¥†∑T¶@‡Æi∆†Ü°,1KK±K†»i‡AB`b∞íÙ(¥“?c™ˇ°ÖÚ:Êñ!‚®≈¸Nƒ>9„¢Ÿ&À4)(	Í\"4QEGå%îZ˘J4ÛgEu	Ëm7B÷.«bemOçÜh@¬Ü∆äísD ¢¯La+œŸ\nB¥ã±Eœ‡)lÔ=L˚U]TÄ§ÿ`Pü’VYıtÇ´Vì¢r]‘XMÆ hé∂uVÇc“@’s\np ÆË\0—µùWıñQˆ?UM#%¸Nå7YµV√,-,,!Hé—Ñ‚-¡`œ®é›ÛÖ ›è?VÇóÕ‰Ùá	\\ØXCµË≥ˆ_ﬁ#\0^`¬†Ù†∏k`^5@H¿b„5Ù‘à“ädF≥˚\\Ú√ı’¨´]Õ’^/<≈Ò˙ÙR\0Â «ÆCz/≤‘ç=`6`∂a6a∂6ˆ#bgªf´TèÜÑràCc_ÑNß¿WÆmLC	jHÇ »ÁD¯IﬁíÄ†!áH!\0‹P@y)8= »%Kr)‡ä%Ø∏√∂©±KRï‡Ú(@rqAVM¶à‰sl`—nÜ÷\r‘w?LÆáT© Úπ…u‡b`@¸¥xR7qE)A@a\rãlEˆyG?=büX¨à¥Bû\"¨=`‰6ˆ1VÖ<@‚òh74y4\\Ô5cF“÷∑ñ˚swvy5,»∞‡ëh<∑1jêÕkú˝à£cßcp^8”D9Cò€dÑÉ¿⁄Lù\n4Y)iQÍ¢°ëDåÍ∞f¶&¿¬3¬4–joGCuØ<√–Cvù‘}Iñ¬Ú∂B≥F‹ÄO~÷M^	1^L_~’ÏÙm5 L®l‡_}¿‹zèRà¬?l.!~qú’	ÇnfcoÅÖBYX2è®ˇBÛ@ÁÛD∂k;ÅïOvf°j∏∏s√Ô\rw/Ÿw†– ·j(?å.Ã€Ô0Î Oj∞∏Tú¢ˇÉˆèZ‚q Ï—Ì.)ó˘âó˛“R›ÿôÄ∂[ÅqânËÍéË‡∞ãH câénÊV∞5U€@ÓàËáx`Qå◊èÇ–u¯n.íf=kt1q,Ωã6X\r	éNqÓkxH>/™÷y	ç…ZïÇµÒqå—ëêÍÏ@ ÁíW°téÜ{ñC˘qﬁπ¿⁄G”KîEÑ	∂-\0Óì…z#H¢Ñ∂Èn¿ÂoÄó·Fì\\®)Ü=’}âê˛êôHáLçÒ^.ônóè˜\"e‰6ÈçèÕô™«nÖ4≤1x-±}—OπbÃÉ5ÛÓÖP:Ä®KóC¿˜GEÓ˜wÑˇ‚AHw\"YËﬂôπ GW uEÙlTQ%Ç∞¿@EWìõmj…lVàÙ¡4†yå*-£nqÅñôl˘6‹&wƒáì“ò9’ó£”R:ßÄÛp\rápW\"+àé¬úÍYÓ«Ÿ·\0-C?˘•‡\\\rQ<\r\0©|∫\"pö^·Ÿ‚@˙oß:ví:#i–\"z\ròëÖô∑'4˜qŸÚ]öüqw-öP\$§ö_çKyzx]–3Ó≤›q†¯ aN:JMi®%\",√«íX-˙V> ‹|zl∞¬~Ü⁄Ï‡–ˆˆ≥.’Ú≥lö…„≠ÆRC∞y1±ﬂê}:9’'ì®≤bY\"G+∑ŒNÑÏ˝ÏXZ\r	œ∫Ü Aµ¥ÅF1=FvÛù√À§ìﬂût}ßÙÄîÖ\0YÁ/Ñ!©Yá∂¶@ô≥Y¢∞ömw*6˚\n 6Ø:≤¨˙‹5VK˙€¶O,Ø©”≠∆Ñ‚Ã= ÷r∞\nÄ“0kû∫5ásÁ∆≤:ì©yÊ±˘/À^,?Ê‚\r–o\rpa∞{©∂CÄˆ¢πrÙC4UïX+5ì†∞ò`™E≥‡â§˘e¢†ﬂn˘—£Ÿ≈§µÇ¸q7b˙L˙Qpàíl˘è™ªäö”∑∑%(À¿f±∑YAHî⁄MN<√¬π≈¥„¡,à€;≠∂{k¶dÅ„ıP3ñC:ù≈Z†/ºjDƒËí3í,√ºEnó£û¯‹£9q·á:Å∫V©jHœ9Cº»zÊ•ëÖπpŸñtXt?|√ Br≠OπTé§∞„•8jÙÓH*√hÕ6≥n:3s¶÷§<‰∞úÙ≠Ókœ¿∑–pY:_–€†¥Ñ+Ωy2◊BÈ±Æ¡©œôªõqÇ•¬ÄöK˚ùl\"® ='r ¶>##∂Ïâ”P{'ßÓç˚\$ÁÈ„Då∞Ÿ'å ‰t–≈∆∏:2†ËOUÓÙ˘<1º|YàéÍRQ_ª¶Ø»õf‡ qvr€«g¯ÉY¿Ê5‹»âX‹ëà‚˝ù'!JûudÃ\nåìr¢˚0s\n>–@»‚›Ωﬂ Ãè∏íﬁ«Yï@ÒJ≠Âﬂ]÷GﬁÌÁèå®»‚!¬ (Ï&˙VZû\rÿ@–„,™…îC9P{›Hm›Äœ›ƒx”ù˜ﬂ6iﬂ›Gò∆-˛3ﬁ‡œ‡‰Ä@∆T|~3‡ﬁgMS›~aÊ^Ñ`k`ÿ¨m’≠◊M|ÿ&û:!YÇ–{ˆåy5´ÿ¿ÅÈ´3n\nüv¯bXWæçX°p¶œÎ\"0J†B“®‚Óè(ëê> ~Õﬁ≈È-iÌhúû›‚^‡Ë¯sﬁÃèê¯ÃïHî…´jR®‰|≠∂≥(¢:◊kn*£òÖjû1V†ÍU≤+¢úµ∫´©ôj\n¡œ∆«ÏcÔ”äˆ‚—‹ƒƒ˘%À7Ì€ı1ê5ﬁ÷`‚åºñú≤*ì€%jëïNÖãxÜss¿R-D§üI±ŒêOÔj÷∞µZUøÓ’´w<-ÎtXHíÄÜ≤‚\" î ∞¢ ‚Fbk<CºÑª∆-‡∞\$Î¥Ä‡1ü÷‘ó<ãë£±6|∑˛≤ÏáOÛc˝_ÓW¸Ñ’¥MéT@ò2ßá§/¬ÃKHÄ¬ß`\0†<hêœ¿ƒ∞ 5â§O*ITXÁà£‡Ü@\$«√h	¿ﬁ†	\0g¸?∞H!∂l– ^Gh¿®⁄·øÅ`⁄è“˜@\0Oà\\çX¡\0)êBÇ\$Çñ &ñ¥`Äs-–§`^@*@xAøÄaM˘ò#<?Pv´ƒÚâ‰∫ä=áÆÀ0ÄÉD-X‡&∞gw\n–∆Œ9≥,|pdƒÉƒiTÕÅ…3†'„–)A·=¶–\"ÜË \0ΩâÄ>Ä‰`„‰O-(7ÇËÉ‰&\r*¡EÄ;dæ\$‡äÿ`\0‡Ö∞'\nÑÈ) ˇ	°\0¨C•0âº{xLÇ (cå‘\0'ÅL\néT8¿ã0‘•]îvxˆ««P=Ó&††µá2rÁ-∞%†-y!π‘îA∆®h‡xhÔ\0ZX`¿l%Ça[]1àCJ2Ü® \$Ä√Lr‡djóFûN(ø⁄N¨5ú4jX±w:íaSz£ÄÇ˙ˇ–\$à-ÒåB@ÛÁ†®ﬁ‡^ìç@˝hy√F!hûtò˘QÚ◊DQ\$	ñ\n“PŒS	h2¬∫0ÅLÏH!s2ÃÜ⁄\"ÅÖäo]T‘Q à¶¨_6XÇ®0@9B0S\nZ\0F·a‹¬Fg<+`È~EZ†\"Œ„A¬ú5QTI˙ËbÉä\0mPΩ%\"VTä'P\n©CKb\\@P∏ÄÆ>  P¿û‚àì)¬Äqq@ÄF¯Ä¿ÊP;©«dî8•Fâ≤|∞S·: t∂óvlÙgT 4 ˛?v&–a1ÿú!|å¬ÜHΩ/Íáàß¢|(†|„/≤(ççÊFb.—x@∂∏á9&ÅkeDD,\$(m,xi„®◊B˛p,(∏≈wUã±…keΩhŒ«òÒ0èöÀËA∆:e}U…]¬π‰˚5’•™>ÿ@∂ÊC˛ ıgó(Pœ4ÆÛ>—^q-}√‡ƒóDá1âùHx^ Úº+ôeﬁá\nàŸ?ÇT@Å§‡G™x‘	–ˆt:—±„¯AÇÄ^M¥U‡Å!H¿¯‹pÎÚAÀƒêÑÑòf‚°rqFÀöœ˙ÿı5‹’}Å¿örvî\n†RK)\"|\$\r04JáZXdá\$P7Å∂H·-m…Wê(ø“ﬁë%ºcyPê^pª>Áè\n i„z”p7Ñ‡2@&')‰°îÊ“√8πi|”úI»N<≠‘” xÈ8\ráˆq<v—|@∏\n˙,f¯®G∂»…3-5≤‚åÙ„B´8—øËxquKtÅÅœDÓ5—É,P!ô—Ω4·É„ïP83`ÍçtÄ_&{XxmË61í†\$Î\rƒ≈'◊I5Õ˝t¿˛„{r_'µki¢u‡‚≈V˘ ∞±Qƒ'é´ˇŸr∑òÎ&ƒ? %cD‹cÀãXÌfU\n‡î‚/Èq+l¢å)DZA+%t ÚŒi”ﬁBÈ≥å%§Œ_(W%ﬁ‰ä6≈«‡ iã<öh5`∑†%ΩÑI;ùe∆t1ú’’%OjÛQê=#\"?∑-´a∑‹›f{áNæ_ÛE¥gV–]ë§¡i√≈yÄN¢p„õD–Ñ‚BäN◊ Ê≤˘06OS-\rí∫˚h4êR#=@TÃVyõàö[¡ËÜ#s∆BÔ`7.!p/‹î√lLü©´ ¡r!˝l‡ıGIu√5Q…MV\0ÄnXD#≥È¨ ê;5•6¬ó3	∆-ÈKY&À6u	Å`cêÈè@ÑA·â?L\rÄy21S«Î0˘ôú?≥<\nähîöÜ'®\$*¡zîã±8˜ﬁî¨Ö^AX‹◊0ÙCdpBA?,‚\0‹1†M=›jôjô◊8 °ßåæ3-`êÃ¶Ö5\0“\\´ó»®Õv≤Ä–?≤ÊYŒlZä–3≥¯AÑ¨◊åœ eÀ2*#˛l#bÙ&≥#‰°!G3íˇ \\⁄qt…∞”û≥⁄≠\r·ìÊ}Q±&By≈·ôx‡\\®\0`oŒ|Ê“æ8®µ	»H'ã8Õ2)gmä‘&‡*Å0	é=~#Ôò˙6s™Ø\$˛1Î2ô4ü∂√∏56¯∑Éö °¿§≠V∆+TeÍzRm¬p‰!N‘%†XÍ®T@,π!Sì4πÇ˚CAƒ=Ç\"zÌ\0eB0à(¡Ò@û5U´CÚÏ-¨î&í†	ËïD!µJÖZ£›Nr«ËéiÚHæ·¶Lq	ÿív#õ?M†’H¯ÑÀ∞ˆ\0)ô8 \nÜÏ¨FoDY’<Ö“Õr\"TÕB˙'À®†Âò¸• ‚Öâ}CâÚÃõ1\$—…>Hœüí§‚È\$±œDB%H <®¢{*ISHÌ„3ô§¥`¢~æTçºe!â;ôä‰8?h∑RnÅØ√^E#J9Õ&2îœD¿S†Ã#'L^∆G•®®îU¡∑%ÚÇ4ΩûΩ&ÇZ^ã∂h†e†˚\$hå¨ (Œ-`'z†HHÊqÄÆ\0∂ïK√d¶ùLÒPJ	ÔÖQ%\0ò·É≠ö[d¸Q3‚	\"#¥ˆ∞§∑ä.‘e™ä\$ÿÀ∂\0M≠;Hc*Ø⁄sãX¯° W™e\nÉS¢dín\n`h)T∆Nù3ì3ìráC˙•≠Jâ`øjîæ(tpäPxjûû˙'ø®t„\$oåÚágƒ:LÑ‘|fŸu™Ë14*eºÛÂ©¨U\0ÈSZà—vqT7ãDEi/IÚH†∫Ç+˘bπàF\"	!ê¨ı5≠jÄÁ¿2\n∫õ¶Ó®8uêT¶ƒòn'èOuTá∏ÇËñ:÷Gu§\"á”Â=ÂÅJÖ˝Y¸DÚ7Ä≠Aùû⁄DIë∫ç‘JT^IÿuÇUVÖ–”ëDEDuÑæâË0DÔ(iúÌ´zÍTGHÍÚ1≥ƒ#©E€¨∫F1π®h¶¨˙¨ıd+Bõí\0B≠.Hb@ÿ#':˘'b2u≥¯JàTÜç£6pŸ⁄“≤©©“çA÷h_Ñ˘rª™®ÇÆDÚãû∏ˇ3Å¬ç-Ü.Ã¨+xü‰ƒ™Ûc≈ç∞S¿ˆ˚`ﬂÄƒ+ÑGØø&,ä∑∫zË˝G≥U–yÜ(´¨‹ãàÏmV3ó⁄¨≠‚œπ8UtkßF∫ÎJ»Ô3Ö0I™Á®ÖıBV‹<N\në@êktä7VÙ≈—	…—ñÂeÔ(¬üı˛Æukw`#ÿâ\"XÏÅëEHàÒ:ﬁ3#ëçtñ\"\rS•á<eXÈ≤`{£íQ•çn◊\nl>⁄o·„¨Q<hŸa\nﬁ˘0ï¿\rÉkä“∆_Ñ¡ÎÎ]≤‹ú1cÅu:]~∂A‹@âd¥JW˝∞ÔXR([ÏR0©P*¡y\"5áCU[ÙJ>\n∂ñEA–la%ıï¬Æ•ì⁄Ïª)«j\rç\"2≠ê¿Â/Yr!ˆ^≥\0T¨ƒ]2%ÚÃ„√+öäÕ`€7⁄6 Üª3\"idÈ•\\ˇ.Z„)aâjX^0ÏÍ¥sﬂ∫ï†2Y~œVé∞ÍÔ–B‘4^Eß£√B]•[k°wL¨¿Î0C	fÁ˘,	ˇ5ä>Î'1u~Á_ß†«˙4¢Â1Î¡,\nd'ñÿäB≥Ú∞krf„K≈<KÃƒ3Ÿ‘eVØ@íèáöÿuG.1ÁZ©IVlüí\nrø¡s–±îí\r∞!/ÖqXg\n¢~\\ÿ7∂ãÅ–r√Ç∏-Ø+c¡“\\,sá∏\0{Ó∂e¥Ï©âjfÏ'íR&«∂¯oê¶.*Îãç©mt¨ÖhÈa+%J’Ø≤µekò…ô/ÖÕª≠ﬂ+x_ì)áŸLì®XN∞îR†ï\0ß‰!–hàîGd⁄î—äu0à´ßÉ,3@ﬁ≥∆hWDJÛm.xﬁãDû\nv£ô\0%àùG£â—4ƒ¯ßUtl¯eRÿ|fÔÔñùÕ*·B†ÿeù∑6ªÁ’ªsô7jÜŒ{V€Ë¬V{9—ö∑è≤=ÑB·GÇ73™B§,àAF +B~'lü¬¸v*h™i<Ñµÿq≤D¨ÆÈd´!ôÌA6Q'i¨VBÃ•<{pã†õ¶28^Ê’5º˘£«◊AKMvU£ÑïmNB¶Ò†¨—õiy≥∞â®Äà¢ l6`—Âp™\0âigΩ»¯„i]”ì4‰–i fYP˛ﬂ¸î°{+ª“û¯\"∆˝É{JˇJe\$àÄ&˛Ì˛Ô‰ó2\$˘îGëI˛BÈË‡N.˛1¿øÕ\\r»I\0m`@ÿÌÏÅåÈÚe0≈C}Ÿª6\"‡Q†ZOÄÄÈC`dx¯Kp0(‡9‡xS ,ã†@ËpÜOâ¨@˝§2(ü¶U¥ıæT´/ƒ…Ä¯Å∂˘8æU˙ZsÑH˚<(7≈≥Ωo%hL j%ÑsÕ˛†`Bâûm…[ùYá—ı}hµ&ó1⁄˙◊l¿Ò˙9\0‹ÿ¥rTÄº·ÅF˘¿\neZ€⁄C\rÃ·°Tõ¬iÖˆ¯∏gn`Œ\ní%ı\"∂Æ•„ky`<E\$o\0…@^zhâÁJ¬ﬁ Ù!\"-ijWA“ﬁ«ZW3dx¿€Or„ßÖù,‚ª”≥.lXedVO`m\n„\rÀ#©¯)‡I)ã¿p?»˙M—°a,|\0Êﬂ! Å›æ°kØ≥\0ç›'˝€Jj·ok“Õëñæ´s3ã∏9Òô\0®!U•v!£tI#qØuP9„)ñ≠¢JÏª.ÍÀ*››ˇÓiq\0†úu<–R	6H≥¬l*≥)»¡ÂÕÅñTÒ’|#X˘'*eád<Å®dYˆ	B°íúÆ@4*vÎÎg∞Yõ	ñåY;¢€_˛PáeZπVy	¿n£¨í\nŸ•«\rÎÛX„í™#ôPDÇ>VüÜ•xœmˆß!¶Íö´˘Ö⁄u»(?∂&¿±oÛì|íåIÜ≥¥©Ylÿr”!©\n—aˆ?T£\"e`µV«ØìÎõû∞´+«^À])ï*Q‚ÅêM\\@ƒµ‘„?†{¯ô:ÎŸ¿<&ô%»AÓåF1Ã%q:Õô&´gPûvådùŸ%º…Q¥Ú‰ø∏|˚a˚~\\öêgu÷FEÀñ^Æâ‡-£40eÉ{ºÖg ≥\"fïk…«#6jÄÀö¬ΩÒta»º¸ooh÷4%A|ñ;ÚSsW¯ÊyÓˆ∂†Ü\\–òπâ8∑Ë˜œn“†’.ÈV¬Z‘OÖ•oÃ¿Â%öLÁ2Ä∞ô≤ÀŒj3mGxëQﬁkòúŒy3OõYÊ≠ëôwÕôÒ≥Sü€ =YØo˛_äê7Å≠°g√[˛q¿OíŒ›z¬≈\rΩF°—©«J:ô»~Í±’ú˘úYùHZBàÖzÌâ˚caçRøÀ-≤_`èå†0äÔ∂√~Q‚%b%ò≠Ø2\n@œ–9îı§ööC-ë≠¶RC2√3ËÅ∫ï]én≤êÆX˘∑S,äÏíÕ¶	«D=”yH`a¢2˘¢à¸#Èˆ™ÂèÓMPE„ﬂıb∏ô¯¡»√%«s;E√≈~R…∂Rê™zC‡G©†∑sêπfKƒHLŒ‚»)Ã≥J*˝íÎÊãL>Ò¯ñ4DcÈ`í@<RÈ\$Ø⁄àêÓH;®’¢í2˝àj¡±¥ ä¿°.§≥(¬ìÆ<\0ñP>H∞∆¿2ûF9åºåsÚ’0mΩJ¿ªﬁπ‚\0(ùÂ˝@J`Tä∫„Gµ~x¯ŸÙÃ~R§WCzRuÆ\$êaÄb%\0£M£Àë®WÆiQÈ	wN∫w¿ıÙÚΩ=î“#L\n&‹q@Œ¬ıÅ”]·	ï◊b∞>`‡π‡p¯òBî'ê><_!8ë8Äâ¡îÒÉƒî.öÚ{√µáÄTàÍBe˙b”Cı©ME0l(ZòƒE˜¢ë]*ÅoL≈y”5˝u“^QóüRÛ⁄÷u)‹À±±ª»|d·T {µÿ*rî#Ä?öû#Y˝uE∞+˝iÎ˙Õ´ÚDXÚ=Ïò\$Jÿ /Ω¢ù3J∫„òNÃïO©˝õk_gÀŸ‹ÜˆLí¸ëºZD\\K\\•8]—°…§çcûFÜƒM@òü√≈ë◊ÄNÈPõπ≈–D3'3˛ı)óá@/œÎô{f\0Z\"=\"P†b–úlï∏rñg:d‚Ÿ∫C¶Q\0ï€\$÷Û≈UÍ7*ˇÙ™b≠óëﬂßÛÜ7\0›ÚﬂÅ»ª|.ÈBπ@1FqúS2Ú˘√DÒPÓY®¶7dG˝HéøuÕ’»H5vπrtÅΩ¡%îÕÆ–1‰…¬J@∏£ÜâΩ»…IVJÌ‘	<®pñíä‘˚ò‹π˜3ep2õz'˜U˘J~Œ#J≈y`Ä`v\0¿/S2Y~!í—H◊û∏á…ΩoBä≥ñÄwÉA°áÕ®˙ñP”ﬁÚíÃm^ÒZfûx≤ú@n˙|si\r∏±\rãPΩÜàmƒ‘kÈ»∆±‰ùªæB_…Ú4ÃQCœ\0]8»WÍT\0ÚÙ—†Ë8*∑0rı¶⁄@§©+’]H\0¿P0OSaRpVûë≤•óŸﬂÙK-\$¿@Z)©ÎÎL≤–ê8®p<pF\$åï8Gﬁ„10≤ï\nÔêÓ±∏N'‚¬WﬂâO∑‡jÑÂÃWù‹Ò¨å√≤W\nß©öno®zÄ+ﬂd¢À	J1±Q&RõµÖÊRfôΩ>◊…«;8s*ÂBcøÄl≈W√2Å\"(∑⁄æœˆÉ£Ú≠d/ªû·„µ¨:Á_‰@`2¿èçíhÄ-Ú(ô∆Y¡B¡\0Á!	EÚÃŸ<µx‹yq\nê`6á1i«Õ‹pH˛úùãá*Â\"àÃr˝>õ©áIÂ;ö¯„»ß5Ó| T›B£?]®∫úß’è6∑CÕﬁoÓõáã◊Á\nÒ6ò,Æ3äX3 ŸÍO∏Ë8û4,—#|û—ÒÌí]œ©¥˚ÑK#XyÔ«dûú´ÑO⁄¶vn¬¯ssOb/nOñä≥∑Ûºy\"ãõö!◊F‹1ø–ú™ŸW9∆éî}≈#|,7k†\\wJÄ≠ÕoHÁ\\3èX◊(ÙˇñçàÎK¶¸¨FÆ€Nlÿ]Êj#ïåÅ@o˙|`5âŒ=Ûπ6È\"\\Ò‘£aﬁÔ™‹º;ıÍÜÈˆ◊øö\$“a˚	 „ÏC^¯T?“Zˇ◊l∂\0ß≈&ƒ6óV\\÷ﬁ∞´¸]_Îó/2––Ä∏´\nÂπMgÖC†ãj!ªí\"5,eiÿ_ÍœYrÕl£±aª¨]QÍ÷àÁ˙bM…π⁄}ÄÈ«\n±x;\0†•∞P]mµKÄ!]N†ì‘∆näø÷Ê.Q◊x÷Yòá’>/Ñ‚hÇê◊®PØ:~Œís xAwpMXÜÌfmX=∆”ﬂaVbÌâB¨wÎœ^«ß◊ŸSó»{eeä’WÆ∂R≤ﬁŒR8˙È€Nw6≤Oº•^w“BouÖß¿# _Ô≥≤üﬁr’hÎΩ]q=ár6´–ì€u”-/OVhäj·≠ˇáCépÊiáøÖ9Î˙É–ËÈü¿NcÙ≠P'ß0ájÉ÷0Æ+ü¢éYH¢_,Úgü\nÇÎù∫a¸ùˇÁ.å±fYä|'5IÒé¬Èw]ŸVù”Â|lß¬€òKS°Ú:Âú\rS◊6LÏNãcø6‹≤xÓÒ—›Œ^È˛= 8c*»´p;Ä£©¨7+‚∏%¡O1WC|≥Ì;°=-Åya}{‚∫œÙt˝Ö_-R§°~´Êƒ'‘œ5>îÅ ôóù;D>8„sﬁEú^JÀÄ~ë\r⁄/øà˘¡\n‡m:ê¨l†°`t&È\nHtDŒÀ„fSf”Ú‰7|ÓÛ©R¡∏úÍ\0`LÓp1·\nq∑&o∞√ˆj¨˛®ÎCëˆPIƒÌ˝∞û∫}WÏ*¯\$#ÚI∆∫C84Òn“Si©Óï5@¯0ŸcÉ_ÚzÙ™oèk{`\$\0yˆﬂyó SDàüó∫JålâƒÓXè˚u‰æﬂ\ràÄΩ‹,ÈIÍz÷\0N¿§√ﬁÿJ‡.›ß‡ßà)+ﬁM≈@mœ Á%-[ÊÿÀﬁŒ\r∏ÓáﬂKMj7€·LŸ)\$•'ñ‚¡Yﬁª„µx0ﬁ\rw◊É≤◊\$k‹ü\0{/‚Lv‡œ≈FÈ†˜˚Fñi ∞Vï±rN¢ Ωt≈u’Óœ{˚¿‡~Áá}≠˘\0æ°‹Åo”¢fJﬂŒêaï[5¸˙Jˇ@oó–çoü8ÅΩŒT'ëT∫5‘Û'®Ç#\$(èÇ„ÔüsFﬂ	ê's~iÚèäÖ8Ô`˜’¢´Ûœ¨‹„Îp¶Ùù~8j\0ë√Ìbá¸?}˛ô¬¨`Í£¶M ÄBV<'Ô√ù)A®Äl‡˝“‡ˇO¯†	¿∑˜≠¿6˝øß÷\nÕÛˇ¬}{}û˙¸|ô÷ÙG£¯PöM*Ä‰fJñg'EÌOˇ.<Ï\rº\0‰˙˘+ˇä?Ö˜˝78£1r}\$◊ôw∂æ·˜r±¡1L[ï≥i‚@úÃAê«;˚ôô\0ä·†øŸ¥J≠ÚìÂ,5—ˇÅü˘V9og\0Sv*–ÚHï¿	iã\r˙@ª•¢ˇà©Ê3ÍNAÃOÙòÊ9´\\Kiú2Æ\"¶‰ª¥DK \r¿…=ÿjZ-Ç›Ã\0N#Íp—Ï·§>€x`’≤û÷I¢∏ﬁbºM\\8⁄õ+'àQ*‚X \\›!PÄ7\0EÀ∫,@|\n‚˚P!∂Dÿ∫x\0Ö“oâækÅÉh®D‡N3a0Öò!rpl∞®¬ Çåj©%†Ø©ZoB%∏©∞6ÔD ñÅN·•8h@ú\"õ\\-8a('\0Ë†Ú‡Ìov?Ê9E»†\0Çs2°–øíxB–¿¨ú4:ìÃ–Ö\"^2sÑ4\$›\$\ré#8ú…`Ä/?LÛê\rŒΩ¿\\ì‘\0€5\"\r¸	,Ç¢Â‰*∫%Â‰‡/¥<pT\"≈t∞%;Iˆ02≠¬s–°∆?êVa≤¿Ÿ2ùê_@“|¯j£2TË›/Kï˙% ∆JË⁄[!(p¡Åêeº¬<{úeÎ\$tˇ˚Ãö“†ÀI\\¿::Zsù¿GDeë:∏_·œ^¥¥Wõ(åh¥º2õıÃ´Ön8É±Ã3!‹ÿ”î·˘Én˙„£ÿ∫	!PÓuÇû·ìæ¨L‚U;€%S3˛Cˇ,ã\0 µí…ã-+620b)€Ü†b√0^0¬0xgÅü\0ŸÒêpê™ô8∞¿◊\n˛Ô©‹.„ë®˘Ä÷pl≤2Û\nÄÆŸ:Y™vÉ¥®hôà Us‘G ú1	˘5@ß˛a.Pp)‡•ƒ) 7	ñ≠ê≤\0)\0Çr¿>1‡Üe≠Ü§ºàOê|æ¥v®Ø§8H,+Oÿ¬ü\n\0)–©Éh?)x.¡à™ú,FL™ój\r¢\0O0=‡™úÜHEHZæ∫?4/ê∂å≤„˜£øvﬁ{°‡É)‹'†\$∂û>¯–Bâë(\rœ®@˛höENï¥ªÚÏõ“}0ç√Ù¿&UÙ4„õ'2Œ¸4I+¬˛Z¨#öü¨6;d<±∆+≈≠+´lAÔ'ç“+„~»⁄ëÅ\n ˝êÀ+êcÍéëBpVqWÖiæ	\r√«)∫º/ÈO«œ:®ªfäb~yŒÌµ\$‹“BÜÁ’¬Øã´¢´ôÄbﬁ8ô∏»ç1æÏWÎπ·ó8Ù÷ÿ5@ñ\"X§=N√óîÏIy¨Ó…¥;ê◊™†Z∫™N´-‘'å7•NåP‘¯n0‚]0)Ò\0ÁQ[√ùáL‡\$9Ô*`~˚™Í∫¶º4;\0úÙÓiü√¿û√≤£5∞ ì¨Ïf4RÎSEm.AÏÎx0˜)a¥>Psëg™πùºZ?ˆcì¶†VX‚ÿdp√¬dÆÃm9e_≠†WªO≠ÆÔ…_çƒs,GÖÜD|XÅbGåvÓ‡ßDDU['@ï*ü™0ŸDpÓÖ6û#\\A≈X-‰≈Háè®	z'B÷âÛ-®ó~|O`4≠ ‡,.X»ç†õ√c+æí√´ ÚÉnY*Ω\"@¿,“™Ω° C∑®wDSs≤‚ô¥∞∂dF_¥™ˆ#⁄EÇ“´[i=62ÔC`N!ô‘!‹—WºIâHΩ\"^(“¢ëxüÅÕí∞}~ÓL‡#Õã‰-RQ@€Ä∫∆5gq@R…©>QC1‚M	57`V\0ÉòQ\\NèP√ãπÖ—<í,O™ƒ\$U\$PQ\n•ÛD9ßÏºTàs≈êËèM˘©Gª≈€\$ZÆø<˚L0ıDKiÔ¥ÍîI€—g∏8wNÇ4;∑ pÑ‡äW\0c|¢ﬁ–{H@\$Äú †,/§+Ãa–˝≠…H˝éà Í\"71íƒàÚ9\$\"1EÊzÇÿE”π´¸:ÁÕ¶t*qÒò˘Pwü]kàÒR0ÿ7tFKh√ÿ†àÌ3ƒÑˆTiﬁCﬁŸr0\"¥ÎÎØÖ†D¬Ïd\"(C˘,H‰/ñ:4Dgq&ü_yˆ1∆Ü—dU\n\nƒíH)Á±+êäH\\K1∏F£1aQ/F™\r\\jÎl¨^wÀcƒV˝c«áê√VL©3à*+S—ü™`d1yCn˝‚±läÆ0ΩiYixáX3ÀûD\\àœ\0∆åÙß”ÏSD ,∞L—Ã<2»1év±Ä+ÏàÍæı¿Öœ]Ù¢ptçGk@0èêãL;Ò“Ç®,RLA·«gË9ëﬂ∏Òõ¢-◊ò;£bøõºÄx'97zìw·DãQ§zqÍâäú‡;¨‘ﬁ2-–∫«ö:r∞¥BTzÂØØÍ®\n\0\"\0Ç£†'ÄåﬂÇú£lâ:EÄ\0<∏ÀÖ@Üí†J‡À'@¨ÚÕyÒa≠Ñ|®àaÅ\0–3ÿíåKÆñJ9–®≠‚Ë»ñâkÆˆÆÅÒÄ0ó‡u8–I¨åäf9\0≈≤lflÑ!®~fjG&:îiÙ~„Wçg)ô™ü“Põ‡iÀR©CY¿—!à:° \0≤SåÜ•-õh# „‚£åøÿÖÃ«õU ªB≤ó‡´ {+É\nœ!i¨Ùí≤Õz¥bõÄÏë≤kÏ§TDQ…\0;,*Öe8≈Sp!ÆR∞º’òÀa—»«!ÒN/r \r≤5%∂bh·—˚∆y!äc∫@DÄVb¢≤ˆotTn¥∫÷dFneàîbÀÖ•ªj\r∫˙·WÉ´P!8Ëº.s…>L§ı\$`‘ÅîOê≠•I:3≤PT¨n\0i(xÖl\n2ÿ‹«@Ä∑%Pù*√3Ú\r¥ñ°∑Inc‚\nÜÇT,7ÓXòò°˘jÖ2Ç’úçZDåÊQÔG¨PX/†™˙I≈P\0…q%cè@/*ﬁ‚∏°Ëƒ~ZSf8…Ä5!jE»Ô&B¨%q\$v\0Lã‡:I®v	W ‡H¢ 35ó9J¿¥2åøÃóL…‚Ïöa‹Ü»I¥ó±®Kß6ÜñùiÁÖ4…‚PX4RÉØÚDJÀ¡…ÍzMOWá`R±N\$˘5'ÒBíÑI/(p0íÅÇ˚'ä\\“äÄ⁄Ñ®.íc»˜XÚÖ ùaK¿˛ü(Ã†“ó≈Ñs)≤@Ñ5áC¢^DVjc†÷0xÎ2mém&Ë“®Ä]'\0z._ÄNOê\rÄÑIgÁXIÊ¨lï2sãU&TàgIöI∞€\"1Ø+ùe(»ÑT¨“:m\$\\¨Pì'¡Ì2ô'xÂRµ<É)-%8ù`I¥ûY gZíõ<T»kk\$Ç˚(ÿ,¶L Ω,≠C ,¡3\0¿∫\"õ)@““0∑(3≤âÀ-)Úˇ2Õï2¨l±·<…ÏìT´¬gK+)Ï¶¬ÑË*,®å‹rÿChL∞»ı(§ï A)prßÑÛ,‰µÎú. ‰“@Ù1OR%&ﬁ·<g&˜ 4ÉE¿»M-‘û»|∏A »™Jª?d≠»≤çDãÅê2√ ó“Óø‘^D52ıô€7Xá≥#x%≤î'#îô¢Ô»›!îå¿¥IöÊØÚ»¨L#?ç#®æ8”E+Izﬂ0t‚Ã°d\rªvLD\rAP 6éb-sØˇ|∞ Åö–ü≤wÜ≤Ã@kH4A™10∏º!Ã4éüsLG/ÒBì°nbp)I'\$à§XNâ*\r*ıj–ÌÁHÏ‰d2•ò<∫`ÜñæH„+‰©%úê	®Ãñ3Æ¿/\0zÎ‹™“Ti	®RaÛÖÆL»ß∆•‹\"íL\0Êq…ø∆≤@úº»ê©ó©™TS.P;îD+˜ –\$‡+@8\0í;~Æ4‡QYF@ÑR‰(@ß`BÃB! »ÄÄ[fëßí-»-«„ÿ!ÅBo™7Í\$¿%≈¿‡˝ƒÇo*%¨QîπÌ <¨«ò˘™u•úhT†`Ëâ€+@A¶£ ÉVë?p_ÅOKC»:A≤èbH´∆T9•…Å¶\nm≤`Â‡'¨PŒ∞≈´I(b%/Ñi…—\0øq3∫˙∆¶{I“!¬L‚ ãdå§?q*RW¶AŒ˝¿„/‹*Ç®ö®sZÄË5õ\nã\0Ün¬∏§éXÕØª˘¬≤?OÑŒ∞¥√#¯!Ä•ú∫ (‚!ì∞˚ ßé öÕ∞2¥\$cÃ\rg6Ù¥Ú6Ëi\$\$ØL ‡ƒﬁ°H´Pòà–ÑÉm7ÅË≤∑ÿ‡k≈	öm+ fäﬁL`ó07ÛoNA8‡Y√ß|Ñ·] U8Y‘ìÜÜ!¡J‚àµ¡(‚ìS\"\r¥‰“\0ÈºÛå\0·8—KíúŒ<ktËìüîΩ9‘‡—NW<ÿS:äÌ!°/√õ√4»ÔhÎH,≈q˛3WîdπÙ÷g!áM6ô≤¨Mó3√'6I’5⁄ÖîØ∫ÒºJº*∆òâs≤AæAÑ1/›∞Bwl.…:å”\nŒÚzB\"1ÒI36‘/SnC ôÀƒçx");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0!Ñè©ÀÌMÒÃ*)æo˙Ø) qï°eàµÓ#ƒÚLÀ\0;";break;case"cross.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0#Ñè©ÀÌ#\na÷Fo~y√.Å_waî·1Á±JÓG¬L◊6]\0\0;";break;case"up.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0 Ñè©ÀÌMQN\nÔ}Ùûa8äyöa≈∂Æ\0«Ú\0;";break;case"down.gif":echo"GIF89a\0\0Å\0001ÓÓÓ\0\0Äôôô\0\0\0!˘\0\0\0,\0\0\0\0\0\0 Ñè©ÀÌMÒÃ*)æ[W˛\\¢«L&Ÿú∆∂ï\0«Ú\0;";break;case"arrow.gif":echo"GIF89a\0\n\0Ä\0\0ÄÄÄˇˇˇ!˘\0\0\0,\0\0\0\0\0\n\0\0Çiñ±ãûî™”≤ﬁª\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Nd=substr($t,-1);return
str_replace($Nd.$Nd,$Nd,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Ff,$Ic=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($Ff)){foreach($X
as$Ed=>$W){unset($Ff[$x][$Ed]);if(is_array($W)){$Ff[$x][stripslashes($Ed)]=$W;$Ff[]=&$Ff[$x][stripslashes($Ed)];}else$Ff[$x][stripslashes($Ed)]=($Ic?$W:stripslashes($W));}}}}function
bracket_escape($t,$Ma=false){static$qh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Ma?array_flip($qh):$qh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$cb,$Ld="",$Me="",$hb=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($cb?" checked":"").($Me?' onclick="'.h($Me).'"':'').">";return($Ld!=""||$hb?"<label".($hb?" class='$hb'":"").">$J".h($Ld)."</label>":$J);}function
optionlist($Se,$qg=null,$Lh=false){$J="";foreach($Se
as$Ed=>$W){$Te=array($Ed=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Ed).'">';$Te=$W;}foreach($Te
as$x=>$X)$J.='<option'.($Lh||is_string($x)?' value="'.h($x).'"':'').(($Lh||is_string($x)?(string)$x:$X)===$qg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Se,$Y="",$Le=true){if($Le)return"<select name='".h($C)."'".(is_string($Le)?' onchange="'.h($Le).'"':"").">".optionlist($Se,$Y)."</select>";$J="";foreach($Se
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ia,$Se,$Y="",$sf=""){return($Se?"<select$Ia><option value=''>$sf".optionlist($Se,$Y,true)."</select>":"<input$Ia size='10' value='".h($Y)."' placeholder='$sf'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($s,$Sd,$Wh=false,$Me=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($Me)."return !toggle('fieldset-$s');\">$Sd</a></legend><div id='fieldset-$s'".($Wh?"":" class='hidden'").">\n";}function
bold($Ua,$hb=""){return($Ua?" class='active $hb'":($hb?" class='$hb'":""));}function
odd($J=' class="odd"'){static$r=0;if(!$J)$r=-1;return($r++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Jc=true;if($Jc)echo"{";if($x!=""){echo($Jc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Jc=false;}else{echo"\n}\n";$Jc=true;}}function
ini_bool($rd){$X=ini_get($rd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Sh,$N,$V,$G){$_SESSION["pwds"][$Sh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$gh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$gh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$m="<p class='error'>"){global$g;$tb=(is_object($h)?$h:$g);$J=array();$I=$tb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$m&&defined("PAGE_HEADER"))echo$m.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($x);}function
where($Z,$o=array()){global$g,$w;$J=array();foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=escape_key($x);$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($o[$x],q($X)));if($w=="sql"&&preg_match('~char|text~',$o[$x]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$x)$J[]=escape_key($x)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$o=array()){parse_str($X,$ab);remove_slashes(array(&$ab));return
where($ab,$o);}function
where_link($r,$e,$Y,$Oe="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($e)."&where%5B$r%5D%5Bop%5D=".urlencode(($Y!==null?$Oe:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$o,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Fa=convert_field($o[$x]);if($Fa)$J.=", $Fa AS ".idf_escape($x);}return$J;}function
adm_cookie($C,$Y,$Ud=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Ud?time()+$Ud:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Sh,$N,$V,$l=null){global$Wb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Wb))."|username|".($l!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Sh!="server"||$N!=""?urlencode($Sh)."=".urlencode($N)."&":"")."username=".urlencode($V).($l!=""?"&db=".urlencode($l):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
adm_redirect($A,$je=null){if($je!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$je;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_adm_redirect($H,$A,$je,$Pf=true,$vc=true,$Cc=false,$fh=""){global$g,$m,$b;if($vc){$Eg=microtime(true);$Cc=!$g->query($H);$fh=format_time($Eg);}$Cg="";if($H)$Cg=$b->messageQuery($H,$fh);if($Cc){$m=error().$Cg;return
false;}if($Pf)adm_redirect($A,$je.$Cg);return
true;}function
queries($H){global$g;static$Jf=array();static$Eg;if(!$Eg)$Eg=microtime(true);if($H===null)return
array(implode("\n",$Jf),format_time($Eg));$Jf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$S,$rc='table'){foreach($S
as$Q){if(!queries("$H ".$rc($Q)))return
false;}return
true;}function
queries_adm_redirect($A,$je,$Pf){list($Jf,$fh)=queries(null);return
query_adm_redirect($Jf,$A,$je,$Pf,false,!$Pf,$fh);}function
format_time($Eg){return
sprintf('%.3f s',max(0,microtime(true)-$Eg));}function
remove_from_uri($gf=""){return
substr(preg_replace("~(?<=[?&])($gf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Cb){return" ".($E==$Cb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Jb=false){$Gc=$_FILES[$x];if(!$Gc)return
null;foreach($Gc
as$x=>$X)$Gc[$x]=(array)$X;$J='';foreach($Gc["error"]as$x=>$m){if($m)return$m;$C=$Gc["name"][$x];$nh=$Gc["tmp_name"][$x];$vb=file_get_contents($Jb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$nh":$nh);if($Jb){$Eg=substr($vb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Eg,$Vf))$vb=iconv("utf-16","utf-8",$vb);elseif($Eg=="\xEF\xBB\xBF")$vb=substr($vb,3);$J.=$vb."\n\n";}else$J.=$vb;}return$J;}function
upload_error($m){$ge=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?'Unable to upload a file.'.($ge?" ".sprintf('Maximum allowed file size is %sB.',$ge):""):'File does not exist.');}function
repeat_pattern($qf,$y){return
str_repeat("$qf{0,65535}",$y/65535)."$qf{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Lg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Lg.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Ff,$kd=array()){while(list($x,$X)=each($Ff)){if(!in_array($x,$kd)){if(is_array($X)){foreach($X
as$Ed=>$W)$Ff[$x."[$Ed]"]=$W;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Dc=false){$J=table_status($Q,$Dc);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$p){foreach($p["source"]as$X)$J[$X][]=$p;}return$J;}function
enum_input($U,$Ia,$n,$Y,$lc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$be);$J=($lc!==null?"<label><input type='$U'$Ia value='$lc'".((is_array($Y)?in_array($lc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($be[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ia value='".($r+1)."'".($cb?' checked':'').'>'.h($b->editVal($X,$n)).'</label>';}return$J;}function
input($n,$Y,$q){global$g,$zh,$b,$w;$C=h(bracket_escape($n["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$Da=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Da[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Da);$q="json";}$Yf=($w=="mssql"&&$n["auto_increment"]);if($Yf&&!$_POST["save"])$q=null;$Tc=(isset($_GET["select"])||$Yf?array("orig"=>'original'):array())+$b->editFunctions($n);$Ia=" name='fields[$C]'";if($n["type"]=="enum")echo
nbsp($Tc[""])."<td>".$b->editInput($_GET["edit"],$n,$Ia,$Y);else{$Jc=0;foreach($Tc
as$x=>$X){if($x===""||!$X)break;$Jc++;}$Le=($Jc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($Jc > f.selectedIndex) f.selectedIndex = $Jc;\" onkeyup='keyupChange.call(this);'":"");$Ia.=$Le;$bd=(in_array($q,$Tc)||isset($Tc[$q]));echo(count($Tc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Tc,$q===null||$bd?$q:"")."</select>":nbsp(reset($Tc))).'<td>';$td=$b->editInput($_GET["edit"],$n,$Ia,$Y);if($td!="")echo$td;elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$be);foreach($be[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$r]' value='".(1<<$r)."'".($cb?' checked':'')."$Le>".h($b->editVal($X,$n)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Le>";elseif(($dh=preg_match('~text|lob~',$n["type"]))||preg_match("~\n~",$Y)){if($dh&&$w!="sqlite")$Ia.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ia.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ia>".h($Y).'</textarea>';}elseif($q=="json")echo"<textarea$Ia cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ie=(!preg_match('~int~',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$B)?((preg_match("~binary~",$n["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$n["unsigned"]?1:0)):($zh[$n["type"]]?$zh[$n["type"]]+($n["unsigned"]?0:1):0));if($w=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$n["type"]))$ie+=7;echo"<input".((!$bd||$q==="")&&preg_match('~(?<!o)int~',$n["type"])?" type='number'":"")." value='".h($Y)."'".($ie?" maxlength='$ie'":"").(preg_match('~char|binary~',$n["type"])&&$ie>20?" size='40'":"")."$Ia>";}}}function
process_input($n){global$b;$t=bracket_escape($n["field"]);$q=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($n["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($n["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);if($q=="NULL")return"NULL";if($n["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads")){$Gc=get_file("fields-$t");if(!is_string($Gc))return
false;return
q($Gc);}return$b->processInput($n,$Y,$q);}function
fields_from_edit(){global$Vb;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$Vb->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Pc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Pc){echo"<ul>\n";$Pc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Pc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($id,$se=false){global$b;$J=$b->dumpHeaders($id,$se);$ef=$_POST["output"];if($ef!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($id).".$J".($ef!="file"&&!preg_match('~[^0-9a-z]~',$ef)?".$ef":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Hc=@tempnam("","");if(!$Hc)return
false;$J=dirname($Hc);unlink($Hc);}}return$J;}function
password_file($i){$Hc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Hc);if($J||!$i)return$J;$Rc=@fopen($Hc,"w");if($Rc){chmod($Hc,0660);$J=rand_string();fwrite($Rc,$J);fclose($Rc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$n,$eh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Ed=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Ed):"")."<td>".select_value($W,$_,$n,$eh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$n);if($_===null){if(is_mail($X))$_="mailto:$X";if($Hf=is_url($X))$_=(($Hf=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"$Hf://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$n);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($eh!=""&&is_shortable($n))$J=shorten_utf8($J,max(0,+$eh));else$J=h($J);}return$b->selectVal($J,$_,$n,$X);}function
is_mail($ic){$Ga='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ub='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$qf="$Ga+(\\.$Ga+)*@($Ub?\\.)+$Ub";return
is_string($ic)&&preg_match("(^$qf(,\\s*$qf)*\$)i",$ic);}function
is_url($P){$Ub='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Ub?\\.)+$Ub(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($n){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$n["type"]);}function
count_rows($Q,$Z,$zd,$Wc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($zd&&($w=="sql"||count($Wc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Wc).")$H":"SELECT COUNT(*)".($zd?" FROM (SELECT 1$H$Xc) x":$H));}function
slow_query($H){global$b,$T;$l=$b->database();$gh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($l==""||$h->select_db($l))){$Jd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Jd,'\');
}, ',1000*$gh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$gh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Mf=rand(1,1e6);return($Mf^$_SESSION["token"]).":$Mf";}function
verify_token(){list($T,$Mf)=explode(":",$_POST["token"]);return($Mf^$_SESSION["token"])==$T;}function
lzw_decompress($Qa){$Qb=256;$Ra=8;$jb=array();$ag=0;$bg=0;for($r=0;$r<strlen($Qa);$r++){$ag=($ag<<8)+ord($Qa[$r]);$bg+=8;if($bg>=$Ra){$bg-=$Ra;$jb[]=$ag>>$bg;$ag&=(1<<$bg)-1;$Qb++;if($Qb>>$Ra)$Ra++;}}$Pb=range("\0","\xFF");$J="";foreach($jb
as$r=>$ib){$hc=$Pb[$ib];if(!isset($hc))$hc=$ai.$ai[0];$J.=$hc;if($r)$Pb[]=$ai.$hc[0];$ai=$hc;}return$J;}function
on_help($ob,$yg=0){return" onmouseover='helpMouseover(this, event, ".h($ob).", $yg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$o,$K,$Gh){global$b,$w,$T,$m;$Qg=$b->tableName(table_status1($a,true));page_header(($Gh?'Edit':'Insert'),$m,array("select"=>array($a,$Qg)),$Qg);if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$o)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$C=>$n){echo"<tr><th>".$b->fieldName($n);$Kb=$_GET["set"][bracket_escape($C)];if($Kb===null){$Kb=$n["default"];if($n["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Kb,$Vf))$Kb=$Vf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$n["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Gh&&$n["auto_increment"]?"":(isset($_GET["select"])?false:$Kb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$n);$q=($_POST["save"]?(string)$_POST["function"][$C]:($Gh&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$n["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($n,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($o){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Gh?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Gh?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$o?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}global$b,$g,$Wb,$ec,$oc,$m,$Tc,$Yc,$ba,$sd,$w,$ca,$Md,$Ke,$rf,$Ig,$cd,$T,$sh,$zh,$Fh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ic);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($rh,$Be=null){if(is_array($rh)){$uf=($Be==1?0:1);$rh=$rh[$uf];}$rh=str_replace("%d","%s",$rh);$Be=format_number($Be);return
sprintf($rh,$Be);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$uf=array_search("SQL",$b->operators);if($uf!==false)unset($b->operators[$uf]);}function
dsn($bc,$V,$G){try{parent::__construct($bc,$V,$G);}catch(Exception$tc){auth_error($tc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$_h=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Wb=array();class
Min_SQL{var$_conn;function
Min_SQL($g){$this->_conn=$g;}function
select($Q,$M,$Z,$Wc,$Ue=array(),$z=1,$E=0,$Bf=false){global$b,$w;$zd=(count($Wc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Wc,$Ue,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Wc&&$zd&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Wc&&$zd?"\nGROUP BY ".implode(", ",$Wc):"").($Ue?"\nORDER BY ".implode(", ",$Ue):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Eg=microtime(true);$J=$this->_conn->query($H);if($Bf)echo$b->selectQuery($H,format_time($Eg));return$J;}function
delete($Q,$Kf,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Kf):" $H$Kf"));}function
update($Q,$O,$Kf,$z=0,$sg="\n"){$Qh=array();foreach($O
as$x=>$X)$Qh[]="$x = $X";$H=table($Q)." SET$sg".implode(",$sg",$Qh);return
queries("UPDATE".($z?limit1($H,$Kf):" $H$Kf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$_f){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Wb["sqlite"]="SQLite 3";$Wb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$xf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Hc){$this->_link=new
SQLite3($Hc);$Th=$this->_link->version();$this->server_info=$Th["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Hc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Hc);}function
query($H,$_h=false){$pe=($_h?"unbufferedQuery":"query");$I=@$this->_link->$pe($H,SQLITE_BOTH,$m);$this->error="";if(!$I){$this->error=$m;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$qf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($qf\\.)?$qf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Hc){$this->dsn(DRIVER.":$Hc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Hc){if(is_readable($Hc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Hc)?$Hc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Hc")." AS a")){$this->Min_SQLite($Hc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$_f){$Qh=array();foreach($L
as$O)$Qh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Qh));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$sg=" "){return" $H$Z".($z!==null?$sg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($l,$mb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($k){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_adm_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$J=array();$_f="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Kb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Kb,$B)?str_replace("''","'",$B[1]):($Kb=="NULL"?null:$Kb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($_f!="")$J[$_f]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$_f=$C;}}$Cg=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Cg,$be,PREG_SET_ORDER);foreach($be
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Cg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Cg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$be,PREG_SET_ORDER);foreach($be
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$n){if($n["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Dg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$K){$C=$K["name"];$u=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$u["lengths"]=array();$u["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$ig){$u["columns"][]=$ig["name"];$u["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$Dg[$C],$Vf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Vf[2],$be);foreach($be[2]as$x=>$X){if($X)$u["descs"][$x]='1';}}if(!$J[""]||$u["type"]!="UNIQUE"||$u["columns"]!=$J[""]["columns"]||$u["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$u;}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$p=&$J[$K["id"]];if(!$p)$p=$K;$p["source"][]=$K["from"];$p["target"][]=$K["to"];}return$J;}function
adm_view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Bc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Bc)\$~",$C)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Bc));return
false;}return
true;}function
create_database($l,$d){global$g;if(file_exists($l)){$g->error='File exists.';return
false;}if(!check_sqlite_name($l))return
false;try{$_=new
Min_SQLite($l);}catch(Exception$tc){$g->error=$tc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$g;$g->Min_SQLite(":memory:");foreach($k
as$l){if(!@unlink($l)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){$Kh=($Q==""||$Lc);foreach($o
as$n){if($n[0]!=""||!$n[1]||$n[2]){$Kh=true;break;}}$c=array();$cf=array();foreach($o
as$n){if($n[1]){$c[]=($Kh?$n[1]:"ADD ".implode($n[1]));if($n[0]!="")$cf[$n[0]]=$n[1][0];}}if(!$Kh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$cf,$Lc))return
false;if($Ka)queries("UPDATE sqlite_sequence SET seq = $Ka WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$o,$cf,$Lc,$v=array()){if($Q!=""){if(!$o){foreach(fields($Q)as$x=>$n){$o[]=process_field($n,$n);$cf[$x]=idf_escape($x);}}$Af=false;foreach($o
as$n){if($n[6])$Af=true;}$Zb=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$Zb[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Hd=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$cf[$e])continue
2;$f[]=$cf[$e].($u["descs"][$x]?" DESC":"");}if(!$Zb[$Hd]){if($u["type"]!="PRIMARY"||!$Af)$v[]=array($u["type"],$Hd,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Lc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Hd=>$p){foreach($p["source"]as$x=>$e){if(!$cf[$e])continue
2;$p["source"][$x]=idf_unescape($cf[$e]);}if(!isset($Lc[" $Hd"]))$Lc[]=" ".format_foreign_key($p);}queries("BEGIN");}foreach($o
as$x=>$n)$o[$x]="  ".implode($n);$o=array_merge($o,array_filter($Lc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$o)."\n)"))return
false;if($Q!=""){if($cf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$cf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($cf)))." FROM ".table($Q)))return
false;$wh=array();foreach(triggers($Q)as$uh=>$hh){$th=trigger($uh);$wh[]="CREATE TRIGGER ".idf_escape($uh)." ".implode(" ",$hh)." ON ".table($C)."\n$th[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($wh
as$th){if(!queries($th))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$_f){if($_f[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Vh){return
apply_queries("DROP VIEW",$Vh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Vh,$Yg){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$t='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$vh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$t\\s*(".implode("|",$vh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($t))?\\s+ON\\s*$t\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$De=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($De?" OF":""),"Of"=>($De[0]=='`'||$De[0]=='"'?idf_unescape($De):$De),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($Q){$J=array();$vh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$vh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($mg){return
true;}function
create_sql($Q,$Ka){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Fb){}function
trigger_sql($Q,$Jg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$g->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Re){list($x,$X)=explode("=",$Re,2);$J[$x]=$X;}return$J;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ec){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Ec);}$w="sqlite";$zh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ig=array_keys($zh);$Fh=array();$Pe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Tc=array("hex","length","lower","round","unixepoch","upper");$Yc=array("avg","count","count distinct","group_concat","max","min","sum");$ec=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Wb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$xf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($pc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){global$b;$l=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Th=pg_version($this->_link);$this->server_info=$Th["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Fb){global$b;if($Fb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Fb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$_h=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$l=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Fb){global$b;return($b->database()==$Fb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$_f){global$g;foreach($L
as$O){$Gh=array();$Z=array();foreach($O
as$x=>$X){$Gh[]="$x = $X";if(isset($_f[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Gh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$sg=" "){return" $H$Z".($z!==null?$sg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($l,$mb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($k){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' WHEN 'mv' THEN 'materialized view' WHEN 'f' THEN 'foreign table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v','mv','f')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_adm_view($R){return
in_array($R["Engine"],array("view","materialized view"));}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Ba=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$y,$K["length"],$va,$Ea)=$B;$K["length"].=$Ea;$bb=$U.$va;if(isset($Ba[$bb])){$K["type"]=$Ba[$bb];$K["full_type"]=$K["type"].$y.$Ea;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$y.$va.$Ea;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Rg=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Rg AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Rg AND ci.oid = i.indexrelid",$h)as$K){$Wf=$K["relname"];$J[$Wf]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Wf]["columns"]=array();foreach(explode(" ",$K["indkey"])as$od)$J[$Wf]["columns"][]=$f[$od];$J[$Wf]["descs"]=array();foreach(explode(" ",$K["indoption"])as$pd)$J[$Wf]["descs"][]=($pd&1?'1':null);$J[$Wf]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Ke;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$ae)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ae[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$ae[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Ke)~",$B[4],$ae)?$ae[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Ke)~",$B[4],$ae)?$ae[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
adm_view($C){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($k){global$g;$g->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){$c=array();$Jf=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c[]="DROP $e";else{$Ph=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($n[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Jf[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$Ph!="")$Jf[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Ph!=""?substr($Ph,9):"''");}}$c=array_merge($c,$Lc);if($Q=="")array_unshift($Jf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Jf,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Jf[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$qb!="")$Jf[]="COMMENT ON TABLE ".table($C)." IS ".q($qb);if($Ka!=""){}foreach($Jf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$i=array();$Xb=array();$Jf=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Xb[]=idf_escape($X[1]);else$Jf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($i)array_unshift($Jf,"ALTER TABLE ".table($Q).implode(",",$i));if($Xb)array_unshift($Jf,"DROP INDEX ".implode(", ",$Xb));foreach($Jf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Vh){return
drop_tables($Vh);}function
drop_tables($S){foreach($S
as$Q){$Fg=table_status($Q);if(!queries("DROP ".strtoupper($Fg["Engine"])." ".table($Q)))return
false;}return
true;}function
move_tables($S,$Vh,$Yg){foreach(array_merge($S,$Vh)as$Q){$Fg=table_status($Q);if(!queries("ALTER ".strtoupper($Fg["Engine"])." ".table($Q)." SET SCHEMA ".idf_escape($Yg)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Vf))return$Vf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($lg){global$g,$zh,$Ig;$J=$g->query("SET search_path TO ".idf_escape($lg));foreach(types()as$U){if(!isset($zh[$U])){$zh[$U]=0;$Ig['User types'][]=$U;}}return$J;}function
use_sql($Fb){return"\connect ".idf_escape($Fb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ec){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Ec);}$w="pgsql";$zh=array();$Ig=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array();$Pe=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Tc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Yc=array("avg","count","count distinct","max","min","sum");$ec=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Wb["oracle"]="Oracle";if(isset($_GET["oracle"])){$xf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($pc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Fb){return
true;}function
query($H,$_h=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$m=oci_error($this->_link);$this->errno=$m["code"];$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'OCI-Lob'))$K[$x]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($Fb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$sg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($l,$mb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($k){return
array();}function
table_status($C=""){$J=array();$ng=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $ng":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $ng":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_adm_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$y="$K[DATA_PRECISION],$K[DATA_SCALE]";if($y==",")$y=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$md=$K["INDEX_NAME"];$J[$md]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$md]["columns"][]=$K["COLUMN_NAME"];$J[$md]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$md]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
adm_view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){$c=$Xb=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");if($X)$c[]=($Q!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Xb[]=idf_escape($n[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Xb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Xb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($Q);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Vh){return
apply_queries("DROP VIEW",$Vh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($mg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($mg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ec){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Ec);}$w="oracle";$zh=array();$Ig=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array();$Pe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Tc=array("length","lower","round","upper");$Yc=array("avg","count","count distinct","max","min","sum");$ec=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Wb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$xf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->errno=$m["code"];$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$qd=sqlsrv_server_info($this->_link);$this->server_info=$qd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Fb){return$this->query("USE ".idf_escape($Fb));}function
query($H,$_h=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$n=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$n["Name"];$J->orgname=$n["Name"];$J->type=($n["Type"]==1?254:0);return$J;}function
seek($D){for($r=0;$r<$D;$r++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Fb){return
mssql_select_db($Fb);}function
query($H,$_h=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$_f){foreach($L
as$O){$Gh=array();$Z=array();foreach($O
as$x=>$X){$Gh[]="$x = $X";if(isset($_f[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Gh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$D=0,$sg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($l,$mb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($l));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$g;$J=array();foreach($k
as$l){$g->select_db($l);$J[$l]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_adm_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$y=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($y?"($y)":""),"type"=>$U,"length"=>$y,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
adm_view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($l){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){$c=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Lc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Lc)$c[""]=$Lc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Xb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Xb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Xb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Xb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$p=&$J[$K["FK_NAME"]];$p["table"]=$K["PKTABLE_NAME"];$p["source"][]=$K["FKCOLUMN_NAME"];$p["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Vh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Vh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Vh,$Yg){return
apply_queries("ALTER SCHEMA ".idf_escape($Yg)." TRANSFER",array_merge($S,$Vh));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($lg){return
true;}function
use_sql($Fb){return"USE ".idf_escape($Fb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Ec){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Ec);}$w="mssql";$zh=array();$Ig=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array();$Pe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Tc=array("len","lower","round","upper");$Yc=array("avg","count","count distinct","max","min","sum");$ec=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Wb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$xf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$Ih=explode(':',$N);$this->service_link=ibase_service_attach($Ih[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Fb){return($Fb=="domain");}function
query($H,$_h=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$n];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$n=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$n['name'],'orgname'=>$n['name'],'type'=>$n['type'],'charsetnr'=>$n['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Kc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$sg=" "){$J='';$J.=($z!==null?$sg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($l,$mb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($k){return
array();}function
table_status($C="",$Dc=false){global$g;$J=array();$Db=tables_list();foreach($Db
as$u=>$X){$u=trim($u);$J[$u]=array('Name'=>$u,'Engine'=>'standard',);if($C==$u)return$J[$u];}return$J;}function
is_adm_view($R){return
false;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($Q).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($Q,$h=null){$J=array();return$J;}function
foreign_keys($Q){return
array();}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($lg){return
true;}function
support($Ec){return
preg_match("~^(columns|sql|status|table)$~",$Ec);}$w="firebird";$Pe=array("=");$Tc=array();$Yc=array();$ec=array();}$Wb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$xf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Fb){return($Fb=="domain");}function
query($H,$_h=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Mg=0;foreach($I
as$Cd)$Mg+=$Cd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Mg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$Cd){$K=array();if($Cd->Name!='')$K['itemName()']=(string)$Cd->Name;foreach($Cd->Attribute
as$Ha){$C=$this->_processValue($Ha->Name);$Y=$this->_processValue($Ha->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($hc){return(is_object($hc)&&$hc['encoding']=='base64'?base64_decode($hc):(string)$hc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Id=array_keys($this->_rows[0]);return(object)array('name'=>$Id[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$_f="itemName()";function
_chunkRequest($jd,$ua,$F,$xc=array()){global$g;foreach(array_chunk($jd,25)as$fb){$hf=$F;foreach($fb
as$r=>$s){$hf["Item.$r.ItemName"]=$s;foreach($xc
as$x=>$X)$hf["Item.$r.$x"]=$X;}if(!sdb_request($ua,$hf))return
false;}$g->affected_rows=count($jd);return
true;}function
_extractIds($Q,$Kf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Kf,$be))$J=array_map('idf_unescape',$be[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Kf.($z?" LIMIT 1":"")))as$Cd)$J[]=$Cd->Name;}return$J;}function
select($Q,$M,$Z,$Wc,$Ue=array(),$z=1,$E=0,$Bf=false){global$g;$g->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Wc,$Ue,$z,$E,$Bf);$g->next=0;return$J;}function
delete($Q,$Kf,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Kf,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Kf,$z=0,$sg="\n"){$Lb=array();$ud=array();$r=0;$jd=$this->_extractIds($Q,$Kf,$z);$s=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($s!=""&&array($s)!=$jd))$Lb["Attribute.".count($Lb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$Ed=>$W){$ud["Attribute.$r.Name"]=$x;$ud["Attribute.$r.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Ed)$ud["Attribute.$r.Replace"]="true";$r++;}}}$F=array('DomainName'=>$Q);return(!$ud||$this->_chunkRequest(($s!=""?array($s):$jd),'BatchPutAttributes',$F,$ud))&&(!$Lb||$this->_chunkRequest($jd,'BatchDeleteAttributes',$F,$Lb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$r=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$r.Name"]=$C;$F["Attribute.$r.Value"]=(is_array($Y)?$X:idf_unescape($Y));$r++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$_f){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Ec){return
preg_match('~sql~',$Ec);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($l,$mb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Dc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Dc){$oe=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($oe){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$oe->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_adm_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($t){return
idf_escape($t);}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
limit($H,$Z,$z,$D=0,$sg=" "){return" $H$Z".($z!==null?$sg."LIMIT $z":"");}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($k){foreach($k
as$l)return
array($l=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($Aa,$Db,$x,$Of=false){$Ta=64;if(strlen($x)>$Ta)$x=pack("H*",$Aa($x));$x=str_pad($x,$Ta,"\0");$Fd=$x^str_repeat("\x36",$Ta);$Gd=$x^str_repeat("\x5C",$Ta);$J=$Aa($Gd.pack("H*",$Aa($Fd.$Db)));if($Of)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($gd,$F['AWSAccessKeyId'],$og)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$gd)."\n/\n$H",$og,true)));@ini_set('track_errors',1);$Gc=@file_get_contents((preg_match('~^https?://~',$gd)?$gd:"http://$gd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Gc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$bi=simplexml_load_string($Gc);if(!$bi){$m=libxml_get_last_error();$g->error=$m->message;return
false;}if($bi->Errors){$m=$bi->Errors->Error;$g->error="$m->Message ($m->Code)";return
false;}$g->error='';$Xg=$ua."Result";return($bi->$Xg?$bi->$Xg:true);}function
sdb_request_all($ua,$Xg,$F=array(),$gh=0){$J=array();$Eg=($gh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$bi=sdb_request($ua,$F);if(!$bi)break;foreach($bi->$Xg
as$hc)$J[]=$hc;if($z&&count($J)>=$z){$_GET["next"]=$bi->NextToken;break;}if($gh&&microtime(true)-$Eg>$gh)return
false;$F['NextToken']=$bi->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($bi->NextToken);return$J;}$w="simpledb";$Pe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Tc=array();$Yc=array("count");$ec=array(array("json"));}$Wb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$xf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$l=$b->database();$Se=array();if($V!=""){$Se["username"]=$V;$Se["password"]=$G;}if($l!="")$Se["db"]=$l;try{$this->_link=@new
MongoClient("mongodb://$N",$Se);return
true;}catch(Exception$tc){$this->error=$tc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Fb){try{$this->_db=$this->_link->selectDB($Fb);return
true;}catch(Exception$tc){$this->error=$tc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$Cd){$K=array();foreach($Cd
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Id=array_keys($this->_rows[0]);$C=$Id[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$_f="_id";function
select($Q,$M,$Z,$Wc,$Ue=array(),$z=1,$E=0,$Bf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$_g=array();foreach($Ue
as$X){$X=preg_replace('~ DESC$~','',$X,1,$_b);$_g[$X]=($_b?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($_g)->limit(+$z)->skip($E*$z));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$tc){$this->_conn->error=$tc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Kc){global$g;$J=array();$Ib=$g->_link->listDBs();foreach($Ib['databases']as$l)$J[]=$l['name'];return$J;}function
collations(){return
array();}function
db_collation($l,$mb){}function
count_tables($k){global$g;$J=array();foreach($k
as$l)$J[$l]=count($g->_link->selectDB($l)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Dc=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_adm_view($R){}function
drop_databases($k){global$g;foreach($k
as$l){$Zf=$g->_link->selectDB($l)->drop();if(!$Zf['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$u){$Ob=array();foreach($u["key"]as$e=>$U)$Ob[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Ob,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Zf=$g->_db->selectCollection($Q)->drop();if(!$Zf['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Zf=$g->_db->selectCollection($Q)->remove();if(!$Zf['ok'])return
false;}return
true;}function
alter_indexes($Q,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$_b);$f[$e]=($_b?-1:1);}$J=$g->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($t){return$t;}function
idf_escape($t){return$t;}function
support($Ec){return
preg_match("~database|indexes~",$Ec);}$w="mongo";$Pe=array("=");$Tc=array();$Yc=array();$ec=array(array("json"));}$Wb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$xf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($of,$vb=array(),$pe='GET'){@ini_set('track_errors',1);$Gc=@file_get_contents($this->_url.'/'.ltrim($of,'/'),false,stream_context_create(array('http'=>array('method'=>$pe,'content'=>json_encode($vb),'ignore_errors'=>1,))));if(!$Gc){$this->error=$php_errormsg;return$Gc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Gc;return
false;}$J=json_decode($Gc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$ub=get_defined_constants(true);foreach($ub['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($of,$vb=array(),$pe='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($of,'/'),$vb,$pe);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Fb){$this->_db=$Fb;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Wc,$Ue=array(),$z=1,$E=0,$Bf=false){global$b;$Db=array();$H="$Q/_search";if($M!=array("*"))$Db["fields"]=$M;if($Ue){$_g=array();foreach($Ue
as$kb){$kb=preg_replace('~ DESC$~','',$kb,1,$_b);$_g[]=($_b?array($kb=>"desc"):$kb);}$Db["sort"]=$_g;}if($z){$Db["size"]=+$z;if($E)$Db["from"]=($E*$z);}foreach($Z
as$X){list($kb,$Ne,$X)=explode(" ",$X,3);if($kb=="_id")$Db["query"]["ids"]["values"][]=$X;elseif($kb.$X!=""){$bh=array("term"=>array(($kb!=""?$kb:"_all")=>$X));if($Ne=="=")$Db["query"]["filtered"]["filter"]["and"][]=$bh;else$Db["query"]["filtered"]["query"]["bool"]["must"][]=$bh;}}if($Db["query"]&&!$Db["query"]["filtered"]["query"]&&!$Db["query"]["ids"])$Db["query"]["filtered"]["query"]=array("match_all"=>array());$Eg=microtime(true);$ng=$this->_conn->query($H,$Db);if($Bf)echo$b->selectQuery("$H: ".print_r($Db,true),format_time($Eg));if(!$ng)return
false;$J=array();foreach($ng['hits']['hits']as$fd){$K=array();if($M==array("*"))$K["_id"]=$fd["_id"];$o=$fd['_source'];if($M!=array("*")){$o=array();foreach($M
as$x)$o[$x]=$fd['fields'][$x];}foreach($o
as$x=>$X){if($Db["fields"])$X=$X[0];$K[$x]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Ec){return
preg_match("~database|table|columns~",$Ec);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($l,$mb){}function
engines(){return
array();}function
count_tables($k){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Dc=false){global$g;$ng=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($ng){foreach($ng["facets"]["count_by_type"]["terms"]as$Q)$J[$Q["term"]]=array("Name"=>$Q["term"],"Engine"=>"table","Rows"=>$Q["count"],);if($C!=""&&$C==$Q["term"])return$J[$C];}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_adm_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$I=$g->query("$Q/_mapping");$J=array();if($I){$Zd=$I[$Q]['properties'];if(!$Zd)$Zd=$I[$g->_db]['mappings'][$Q]['properties'];if($Zd){foreach($Zd
as$C=>$n){$J[$C]=array("field"=>$C,"full_type"=>$n["type"],"type"=>$n["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($n["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($l){global$g;return$g->rootQuery(urlencode($l),array(),'PUT');}function
drop_databases($k){global$g;return$g->rootQuery(urlencode(implode(',',$k)),array(),'DELETE');}function
drop_tables($S){global$g;$J=true;foreach($S
as$Q)$J=$J&&$g->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$Pe=array("=","query");$Tc=array();$Yc=array();$ec=array(array("json"));}$Wb=array("server"=>"MySQL")+$Wb;if(!defined("DRIVER")){$xf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($gd,$tf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$gd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($tf)?$tf:ini_get("mysqli.default_port")),(!is_numeric($tf)?$tf:null));return$J;}function
set_charset($Za){if(parent::set_charset($Za))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Za");}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$n];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Za){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Za,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Za");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Fb){return
mysql_select_db($Fb,$this->_link);}function
query($H,$_h=false){$I=@($_h?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($Za){$this->query("SET NAMES $Za");}function
select_db($Fb){return$this->query("USE ".idf_escape($Fb));}function
query($H,$_h=false){$this->setAttribute(1000,!$_h);return
parent::query($H,$_h);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$_f){$f=array_keys(reset($L));$yf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Qh=array();foreach($f
as$x)$Qh[$x]="$x = VALUES($x)";$Lg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Qh);$Qh=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Qh&&(strlen($yf)+$y+strlen($Y)+strlen($Lg)>1e6)){if(!queries($yf.implode(",\n",$Qh).$Lg))return
false;$Qh=array();$y=0;}$Qh[]=$Y;$y+=strlen($Y)+2;}return
queries($yf.implode(",\n",$Qh).$Lg);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($jg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$jg;return$J;}function
get_databases($Kc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Kc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$sg=" "){return" $H$Z".($z!==null?$sg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($l,$mb){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$mb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($k){$J=array();foreach($k
as$l)$J[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));return$J;}function
table_status($C="",$Dc=false){global$g;$J=array();foreach(get_rows($Dc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_adm_view($R){return$R["Engine"]===null;}function
fk_support($R){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$g,$Ke;static$qf='`(?:[^`]|``)+`';$J=array();$Ab=$g->result("SHOW CREATE TABLE ".table($Q),1);if($Ab){preg_match_all("~CONSTRAINT ($qf) FOREIGN KEY ?\\(((?:$qf,? ?)+)\\) REFERENCES ($qf)(?:\\.($qf))? \\(((?:$qf,? ?)+)\\)(?: ON DELETE ($Ke))?(?: ON UPDATE ($Ke))?~",$Ab,$be,PREG_SET_ORDER);foreach($be
as$B){preg_match_all("~$qf~",$B[2],$Ag);preg_match_all("~$qf~",$B[5],$Yg);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Ag[0]),"target"=>array_map('idf_unescape',$Yg[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
adm_view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($l){global$g;return($g->server_info>=5&&$l=="information_schema")||($g->server_info>=5.5&&$l=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(preg_match('~ at line ([0-9]+)$~',$g->error,$Vf))return$Vf[1]-1;}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).($d?" COLLATE ".q($d):""));}function
drop_databases($k){$J=apply_queries("DROP DATABASE",$k,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$d){$J=false;if(create_database($C,$d)){$Xf=array();foreach(tables_list()as$Q=>$U)$Xf[]=table($Q)." TO ".idf_escape($C).".".table($Q);$J=(!$Xf||queries("RENAME TABLE ".implode(", ",$Xf)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$La=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$La="";break;}if($u["type"]=="PRIMARY")$La=" UNIQUE";}}return" AUTO_INCREMENT$La";}function
alter_table($Q,$C,$o,$Lc,$qb,$mc,$d,$Ka,$lf){$c=array();foreach($o
as$n)$c[]=($n[1]?($Q!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($Q!=""?$n[2]:""):"DROP ".idf_escape($n[0]));$c=array_merge($c,$Lc);$Fg=($qb!==null?" COMMENT=".q($qb):"").($mc?" ENGINE=".q($mc):"").($d?" COLLATE ".q($d):"").($Ka!=""?" AUTO_INCREMENT=$Ka":"");if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$Fg$lf");if($Q!=$C)$c[]="RENAME TO ".table($C);if($Fg)$c[]=ltrim($Fg);return($c||$lf?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$lf):true);}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Vh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Vh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Vh,$Yg){$Xf=array();foreach(array_merge($S,$Vh)as$Q)$Xf[]=table($Q)." TO ".idf_escape($Yg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Xf));}function
copy_tables($S,$Vh,$Yg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Yg==DB?table("copy_$Q"):idf_escape($Yg).".".table($Q));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Vh
as$Q){$C=($Yg==DB?table("copy_$Q"):idf_escape($Yg).".".table($Q));$Uh=adm_view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Uh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$oc,$sd,$zh;$Ba=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$yh="((".implode("|",array_merge(array_keys($zh),$Ba)).")\\b(?:\\s*\\(((?:[^'\")]|$oc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$qf="\\s*(".($U=="FUNCTION"?"":$sd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$yh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$qf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$yh\\s+":"")."(.*)~is",$i,$B);$o=array();preg_match_all("~$qf\\s*,?~is",$B[1],$be,PREG_SET_ORDER);foreach($be
as$gf){$C=str_replace("``","`",$gf[2]).$gf[3];$o[]=array("field"=>$C,"type"=>strtolower($gf[5]),"length"=>preg_replace_callback("~$oc~s",'normalize_enum',$gf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$gf[8] $gf[7]"))),"null"=>1,"full_type"=>$gf[4],"inout"=>strtoupper($gf[1]),"collation"=>strtolower($gf[9]),);}if($U!="FUNCTION")return
array("fields"=>$o,"definition"=>$B[11]);return
array("fields"=>$o,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($lg){return
true;}function
create_sql($Q,$Ka){global$g;$J=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ka)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Fb){return"USE ".idf_escape($Fb);}function
trigger_sql($Q,$Jg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Jg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($n){if(preg_match("~binary~",$n["type"]))return"HEX(".idf_escape($n["field"]).")";if($n["type"]=="bit")return"BIN(".idf_escape($n["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))return"AsWKT(".idf_escape($n["field"]).")";}function
unconvert_field($n,$J){if(preg_match("~binary~",$n["type"]))$J="UNHEX($J)";if($n["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))$J="GeomFromText($J)";return$J;}function
support($Ec){global$g;return!preg_match("~scheme|sequence|type|view_trigger".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Ec);}$w="sql";$zh=array();$Ig=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array("unsigned","zerofill","unsigned zerofill");$Pe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Tc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Yc=array("avg","count","count distinct","group_concat","max","min","sum");$ec=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.2.2";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Kc=true){return
get_databases($Kc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Wb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Wb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Xd,$G){return
true;}function
tableName($Pg){return
h($Pg["Name"]);}function
fieldName($n,$Ue=0){return'<span title="'.h($n["full_type"]).'">'.h($n["field"]).'</span>';}function
selectLinks($Pg,$O=""){echo'<p class="links">';$Wd=array("select"=>'Select data');if(support("table")||support("indexes"))$Wd["table"]='Show structure';if(support("table")){if(is_adm_view($Pg))$Wd["view"]='Alter view';else$Wd["create"]='Alter table';}if($O!==null)$Wd["edit"]='New item';foreach($Wd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Pg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Og){return
array();}function
backwardKeysPrint($Na,$K){}function
selectQuery($H,$fh){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($fh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Mc){return$L;}function
selectLink($X,$n){}function
selectVal($X,$_,$n,$bf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$n["type"])&&!preg_match("~var~",$n["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$n["type"])&&!is_utf8($X))$J=lang(array('%d byte','%d bytes'),strlen($bf));return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$n){return$X;}function
selectColumnsPrint($M,$f){global$Tc,$Yc;print_fieldset("select",'Select',$M);$r=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$r][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Tc||$Yc?"<select name='columns[$r][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Functions'=>$Tc,'Aggregation'=>$Yc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$r++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",'Search',$Z);foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ya="this.nextSibling.onchange();";for($r=0;$r<=count($_GET["where"]);$r++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$r][col]' onchange='$Ya'",$f,$X["col"],"(".'anywhere'.")"),html_select("where[$r][op]",$this->operators,$X["op"],$Ya),"<input type='search' name='where[$r][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Ue,$f,$v){print_fieldset("sort",'Sort',$Ue);$r=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$r]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$r]",1,isset($_GET["desc"][$x]),'descending')."</div>\n";$r++;}}echo"<div>".select_input(" name='order[$r]' onchange='selectAddRow(this);'",$f),checkbox("desc[$r]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($eh){if($eh!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($eh)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($jc,$f){}function
selectColumnsProcess($f,$v){global$Tc,$Yc;$M=array();$Wc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Tc)||in_array($X["fun"],$Yc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Yc))$Wc[]=$M[$x];}}return
array($M,$Wc);}function
selectSearchProcess($o,$v){global$g,$w;$J=array();foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$sb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$ld=process_length($X["val"]);$sb.=" ".($ld!=""?$ld:"(NULL)");}elseif($X["op"]=="SQL")$sb=" $X[val]";elseif($X["op"]=="LIKE %%")$sb=" LIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$sb=" ILIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$sb.=" ".$this->processInput($o[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$sb;else{$nb=array();foreach($o
as$C=>$n){$Ad=preg_match('~char|text|enum|set~',$n["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$n["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Ad)){$C=idf_escape($C);$nb[]=($w=="sql"&&$Ad&&!preg_match("~^utf8_~",$n["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($nb?"(".implode("$sb OR ",$nb)."$sb)":"0");}}}return$J;}function
selectOrderProcess($o,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Mc){return
false;}function
selectQueryBuild($M,$Z,$Wc,$Ue,$z,$E){return"";}function
messageQuery($H,$fh){global$w;restart_session();$dd=&get_session("queries");$s="sql-".count($dd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$dd[$_GET["db"]][]=array($H,time(),$fh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$s' onclick=\"return !toggle('$s');\">".'SQL command'."</a>"."<div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.($fh?" <span class='time'>($fh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($dd[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($n){global$ec;$J=($n["null"]?"NULL/":"");foreach($ec
as$x=>$Tc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Tc
as$qf=>$X){if(!$qf||preg_match("~$qf~",$n["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$n["type"]))$J.="/SQL";}}if($n["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($Q,$n,$Ia,$Y){if($n["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ia value='-1' checked><i>".'original'."</i></label> ":"").($n["null"]?"<label><input type='radio'$Ia value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ia,$n,$Y,0);return"";}function
processInput($n,$Y,$q=""){if($q=="SQL")return$Y;$C=$n["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$q))$J="$q()";elseif(preg_match('~^current_(date|timestamp)$~',$q))$J=$q;elseif(preg_match('~^([+-]|\\|\\|)$~',$q))$J=idf_escape($C)." $q $J";elseif(preg_match('~^[+-] interval$~',$q))$J=idf_escape($C)." $q ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$q))$J="$q(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$q))$J="$q($J)";return
unconvert_field($n,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($l){}function
dumpTable($Q,$Jg,$Bd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Jg)dump_csv(array_keys(fields($Q)));}else{if($Bd==2){$o=array();foreach(fields($Q)as$C=>$n)$o[]=idf_escape($C)." $n[full_type]";$i="CREATE TABLE ".table($Q)." (".implode(", ",$o).")";}else$i=create_sql($Q,$_POST["auto_increment"]);set_utf8mb4($i);if($Jg&&$i){if($Jg=="DROP+CREATE"||$Bd==1)echo"DROP ".($Bd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Bd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($Q,$Jg,$H){global$g,$w;$de=($w=="sqlite"?0:1048576);if($Jg){if($_POST["format"]=="sql"){if($Jg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$o=fields($Q);}$I=$g->query($H,1);if($I){$ud="";$Wa="";$Id=array();$Lg="";$Fc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Fc()){if(!$Id){$Qh=array();foreach($K
as$X){$n=$I->fetch_field();$Id[]=$n->name;$x=idf_escape($n->name);$Qh[]="$x = VALUES($x)";}$Lg=($Jg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Qh):"").";\n";}if($_POST["format"]!="sql"){if($Jg=="table"){dump_csv($Id);$Jg="INSERT";}dump_csv($K);}else{if(!$ud)$ud="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Id)).") VALUES";foreach($K
as$x=>$X){$n=$o[$x];$K[$x]=($X!==null?unconvert_field($n,preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&$X!=''?$X:q($X)):"NULL");}$jg=($de?"\n":" ")."(".implode(",\t",$K).")";if(!$Wa)$Wa=$ud.$jg;elseif(strlen($Wa)+4+strlen($jg)+strlen($Lg)<$de)$Wa.=",$jg";else{echo$Wa.$Lg;$Wa=$ud.$jg;}}}if($Wa)echo$Wa.$Lg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($id){return
friendly_url($id!=""?$id:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($id,$se=false){$ef=$_POST["output"];$_c=(preg_match('~sql~',$_POST["format"])?"sql":($se?"tar":"csv"));header("Content-Type: ".($ef=="gz"?"application/x-gzip":($_c=="tar"?"application/x-tar":($_c=="sql"||$ef!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($ef=="gz")ob_start('ob_gzencode',1e6);return$_c;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($re){global$ia,$w,$Wb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($re=="auth"){$Jc=true;foreach((array)$_SESSION["pwds"]as$Sh=>$wg){foreach($wg
as$N=>$Nh){foreach($Nh
as$V=>$G){if($G!==null){if($Jc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Jc=false;}$Ib=$_SESSION["db"][$Sh][$N][$V];foreach(($Ib?array_keys($Ib):array(""))as$l)echo"<a href='".h(auth_url($Sh,$N,$V,$l))."'>($Wb[$Sh]) ".h($V.($N!=""?"@$N":"").($l!=""?" - $l":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$re&&DB!=""){$g->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.2.2",'"></script>
<script type="text/javascript">
';if($S){$Wd=array();foreach($S
as$Q=>$U)$Wd[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Wd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($re);if(DB==""||!$re){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$re&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($re){global$b,$g;$k=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Gb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'database'."'>DB</span>: ".($k?"<select name='db'$Gb>".optionlist(array(""=>"")+$k,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($k?" class='hidden'":"").">\n";if($re!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".'Schema'.": <select name='ns'$Gb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$Fg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select").">".'select'."</a> ";$C=$this->tableName($Fg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_adm_view($Fg)?"view":""),"structure")." title='".'Show structure'."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Pe;function
page_header($ih,$m="",$Va=array(),$jh=""){global$ca,$ia,$b,$Wb,$w;page_headers();if(is_ajax()&&$m){page_messages($m);exit;}$kh=$ih.($jh!=""?": $jh":"");$lh=strip_tags($kh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$lh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.2",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.2",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.2",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Va!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Wb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Va===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Va)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Va)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Va
as$x=>$X){$Nb=(is_array($X)?$X[1]:h($X));if($Nb!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Nb</a> &raquo; ";}}echo"$ih\n";}}echo"<h2>$kh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($m);$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true))$k=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($m){$Hh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ne=$_SESSION["messages"][$Hh];if($ne){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ne)."</div>\n";unset($_SESSION["messages"][$Hh]);}if($m)echo"<div class='error'>$m</div>\n";}function
page_footer($re=""){global$b,$T;echo'</div>

';if($re!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($re);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($ue){while($ue>=2147483648)$ue-=4294967296;while($ue<=-2147483649)$ue+=4294967296;return(int)$ue;}function
long2str($W,$Xh){$jg='';foreach($W
as$X)$jg.=pack('V',$X);if($Xh)return
substr($jg,0,end($W));return$jg;}function
str2long($jg,$Xh){$W=array_values(unpack('V*',str_pad($jg,4*ceil(strlen($jg)/4),"\0")));if($Xh)$W[]=strlen($jg);return$W;}function
xxtea_mx($di,$ci,$Mg,$Ed){return
int32((($di>>5&0x7FFFFFF)^$ci<<2)+(($ci>>3&0x1FFFFFFF)^$di<<4))^int32(($Mg^$ci)+($Ed^$di));}function
encrypt_string($Hg,$x){if($Hg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Hg,true);$ue=count($W)-1;$di=$W[$ue];$ci=$W[0];$If=floor(6+52/($ue+1));$Mg=0;while($If-->0){$Mg=int32($Mg+0x9E3779B9);$dc=$Mg>>2&3;for($ff=0;$ff<$ue;$ff++){$ci=$W[$ff+1];$te=xxtea_mx($di,$ci,$Mg,$x[$ff&3^$dc]);$di=int32($W[$ff]+$te);$W[$ff]=$di;}$ci=$W[0];$te=xxtea_mx($di,$ci,$Mg,$x[$ff&3^$dc]);$di=int32($W[$ue]+$te);$W[$ue]=$di;}return
long2str($W,false);}function
decrypt_string($Hg,$x){if($Hg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Hg,false);$ue=count($W)-1;$di=$W[$ue];$ci=$W[0];$If=floor(6+52/($ue+1));$Mg=int32($If*0x9E3779B9);while($Mg){$dc=$Mg>>2&3;for($ff=$ue;$ff>0;$ff--){$di=$W[$ff-1];$te=xxtea_mx($di,$ci,$Mg,$x[$ff&3^$dc]);$ci=int32($W[$ff]-$te);$W[$ff]=$ci;}$di=$W[$ue];$te=xxtea_mx($di,$ci,$Mg,$x[$ff&3^$dc]);$ci=int32($W[0]-$te);$W[0]=$ci;$Mg=int32($Mg-0x9E3779B9);}return
long2str($W,true);}$g='';$cd=$_SESSION["token"];if(!$cd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$rf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$rf[$x]=$X;}}function
add_invalid_login(){global$b;$Hc=get_temp_dir()."/adminer.invalid";$Rc=@fopen($Hc,"r+");if(!$Rc){$Rc=@fopen($Hc,"w");if(!$Rc)return;}flock($Rc,LOCK_EX);$xd=unserialize(stream_get_contents($Rc));$fh=time();if($xd){foreach($xd
as$yd=>$X){if($X[0]<$fh)unset($xd[$yd]);}}$wd=&$xd[$b->bruteForceKey()];if(!$wd)$wd=array($fh+30*60,0);$wd[1]++;$ug=serialize($xd);rewind($Rc);fwrite($Rc,$ug);ftruncate($Rc,strlen($ug));flock($Rc,LOCK_UN);fclose($Rc);}$Ja=$_POST["auth"];if($Ja){$xd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$wd=$xd[$b->bruteForceKey()];$_e=($wd[1]>30?$wd[0]-time():0);if($_e>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($_e/60)));session_regenerate_id();$Sh=$Ja["driver"];$N=$Ja["server"];$V=$Ja["username"];$G=(string)$Ja["password"];$l=$Ja["db"];set_password($Sh,$N,$V,$G);$_SESSION["db"][$Sh][$N][$V][$l]=true;if($Ja["permanent"]){$x=base64_encode($Sh)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($l);$Cf=$b->permanentLogin(true);$rf[$x]="$x:".base64_encode($Cf?encrypt_string($G,$Cf):"");adm_cookie("adminer_permanent",implode(" ",$rf));}if(count($_POST)==1||DRIVER!=$Sh||SERVER!=$N||$_GET["username"]!==$V||DB!=$l)adm_redirect(auth_url($Sh,$N,$V,$l));}elseif($_POST["logout"]){if($cd&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();adm_redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($rf&&!$_SESSION["pwds"]){session_regenerate_id();$Cf=$b->permanentLogin();foreach($rf
as$x=>$X){list(,$gb)=explode(":",$X);list($Sh,$N,$V,$l)=array_map('base64_decode',explode("-",$x));set_password($Sh,$N,$V,decrypt_string(base64_decode($gb),$Cf));$_SESSION["db"][$Sh][$N][$V][$l]=true;}}function
unset_permanent(){global$rf;foreach($rf
as$x=>$X){list($Sh,$N,$V,$l)=array_map('base64_decode',explode("-",$x));if($Sh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$l==DB)unset($rf[$x]);}adm_cookie("adminer_permanent",implode(" ",$rf));}function
auth_error($m){global$b,$cd;$m=h($m);$xg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$xg]||$_GET[$xg])&&!$cd)$m='Session expired, please login again.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$m.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$xg]&&$_GET[$xg]&&ini_bool("session.use_only_cookies"))$m='Session support must be enabled.';$F=session_get_cookie_params();adm_cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$m,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$xf)),false);page_footer("auth");exit;}$g=connect();}$Vb=new
Min_Driver($g);if(!is_object($g)||!$b->login($_GET["username"],get_password()))auth_error((is_string($g)?$g:'Invalid credentials.'));if($Ja&&$_POST["token"])$_POST["token"]=$T;$m='';if($_POST){if(!verify_token()){$rd="max_input_vars";$he=ini_get($rd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$he||$X<$he)){$rd=$x;$he=$X;}}}$m=(!$_POST["token"]&&$he?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$rd'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$m=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$m.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$Xe=array(),$z=0){global$w;$Wd=array();$v=array();$f=array();$Sa=array();$zh=array();$J=array();odd('');for($r=0;(!$z||$r<$z)&&($K=$I->fetch_row());$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Dd=0;$Dd<count($K);$Dd++){$n=$I->fetch_field();$C=$n->name;$We=$n->orgtable;$Ve=$n->orgname;$J[$n->table]=$We;if($Xe&&$w=="sql")$Wd[$Dd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($We!=""){if(!isset($v[$We])){$v[$We]=array();foreach(indexes($We,$h)as$u){if($u["type"]=="PRIMARY"){$v[$We]=array_flip($u["columns"]);break;}}$f[$We]=$v[$We];}if(isset($f[$We][$Ve])){unset($f[$We][$Ve]);$v[$We][$Ve]=$Dd;$Wd[$Dd]=$We;}}if($n->charsetnr==63)$Sa[$Dd]=true;$zh[$Dd]=$n->type;echo"<th".($We!=""||$n->name!=$Ve?" title='".h(($We!=""?"$We.":"").$Ve)."'":"").">".h($C).($Xe?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Sa[$x]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($zh[$x]==254)$X="<code>$X</code>";}if(isset($Wd[$x])&&!$f[$Wd[$x]]){if($Xe&&$w=="sql"){$Q=$K[array_search("table=",$Wd)];$_=$Wd[$x].urlencode($Xe[$Q]!=""?$Xe[$Q]:$Q);}else{$_="edit=".urlencode($Wd[$x]);foreach($v[$Wd[$x]]as$kb=>$Dd)$_.="&where".urlencode("[".bracket_escape($kb)."]")."=".urlencode($K[$Dd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($rg){$J=array();foreach(table_status('',true)as$Qg=>$Q){if($Qg!=$rg&&fk_support($Q)){foreach(fields($Qg)as$n){if($n["primary"]){if($J[$Qg]){unset($J[$Qg]);break;}$J[$Qg]=$n;}}}}return$J;}function
textarea($C,$Y,$L=10,$nb=80){global$w;echo"<textarea name='$C' rows='$L' cols='$nb' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$n,$mb,$Nc=array()){global$Ig,$zh,$Fh,$Ke;$U=$n["type"];echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($zh[$U])&&!isset($Nc[$U]))array_unshift($Ig,$U);if($Nc)$Ig['Foreign keys']=$Nc;echo
optionlist($Ig,$U),'</select>
<td><input name="',$x,'[length]" value="',h($n["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$n["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$x"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($mb,$n["collation"]).'</select>',($Fh?"<select name='$x"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Fh,$n["unsigned"]).'</select>':''),(isset($n['on_update'])?"<select name='$x"."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$n["on_update"]).'</select>':''),($Nc?"<select name='$x"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Ke),$n["on_delete"])."</select> ":" ");}function
process_length($y){global$oc;return(preg_match("~^\\s*\\(?\\s*$oc(?:\\s*,\\s*$oc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$oc~",$y,$be)?"(".implode(",",$be[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($n,$lb="COLLATE"){global$Fh;return" $n[type]".process_length($n["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&in_array($n["unsigned"],$Fh)?" $n[unsigned]":"").(preg_match('~char|text|enum|set~',$n["type"])&&$n["collation"]?" $lb ".q($n["collation"]):"");}function
process_field($n,$xh){global$w;$Kb=$n["default"];return
array(idf_escape(trim($n["field"])),process_type($xh),($n["null"]?" NULL":" NOT NULL"),(isset($Kb)?" DEFAULT ".((preg_match('~time~',$n["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Kb))||($w=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Kb))||($n["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Kb))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Kb))?$Kb:q($Kb)):""),(preg_match('~timestamp|datetime~',$n["type"])&&$n["on_update"]?" ON UPDATE $n[on_update]":""),(support("comment")&&$n["comment"]!=""?" COMMENT ".q($n["comment"]):""),($n["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($o,$mb,$U="TABLE",$Nc=array(),$rb=false){global$g,$sd;$o=array_values($o);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>Default value
',(support("comment")?"<td".($rb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.2' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($o
as$r=>$n){$r++;$Ye=$n[($_POST?"orig":"field")];$Rb=(isset($_POST["add"][$r-1])||(isset($n["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$Ye=="");echo'<tr',($Rb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$sd),$n["inout"]):""),'<th>';if($Rb){echo'<input name="fields[',$r,'][field]" value="',h($n["field"]),'" onchange="editingNameChange(this);',($n["field"]!=""||count($o)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($Ye),'">
';edit_type("fields[$r]",$n,$mb,$Nc);if($U=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$n["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$r,'"';if($n["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$r][has_default]",1,$n["has_default"]),'<input name="fields[',$r,'][default]" value="',h($n["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($rb?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($n["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.2' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.2.2' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.2.2' alt='v' title='".'Move down'."'>&nbsp;":""),($Ye==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.2' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$o){ksort($o);$D=0;if($_POST["up"]){$Nd=0;foreach($o
as$x=>$n){if(key($_POST["up"])==$x){unset($o[$x]);array_splice($o,$Nd,0,array($n));break;}if(isset($n["field"]))$Nd=$D;$D++;}}elseif($_POST["down"]){$Pc=false;foreach($o
as$x=>$n){if(isset($n["field"])&&$Pc){unset($o[key($_POST["down"])]);array_splice($o,$D,0,array($Pc));break;}if(key($_POST["down"])==$x)$Pc=$n;$D++;}}elseif($_POST["add"]){$o=array_values($o);array_splice($o,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Uc,$Ef,$f,$Je){if(!$Ef)return
true;if($Ef==array("ALL PRIVILEGES","GRANT OPTION"))return($Uc=="GRANT"?queries("$Uc ALL PRIVILEGES$Je WITH GRANT OPTION"):queries("$Uc ALL PRIVILEGES$Je")&&queries("$Uc GRANT OPTION$Je"));return
queries("$Uc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Ef).$f).$Je);}function
drop_create($Xb,$i,$Yb,$ch,$ac,$A,$me,$ke,$le,$Ge,$xe){if($_POST["drop"])query_adm_redirect($Xb,$A,$me);elseif($Ge=="")query_adm_redirect($i,$A,$le);elseif($Ge!=$xe){$Bb=queries($i);queries_adm_redirect($A,$ke,$Bb&&queries($Xb));if($Bb)queries($Yb);}else
queries_adm_redirect($A,$ke,queries($ch)&&queries($ac)&&queries($Xb)&&queries($i));}function
create_trigger($Je,$K){global$w;$hh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Je.$hh:$hh.$Je).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($fg,$K){global$sd;$O=array();$o=(array)$K["fields"];ksort($o);foreach($o
as$n){if($n["field"]!="")$O[]=(preg_match("~^($sd)\$~",$n["inout"])?"$n[inout] ":"").idf_escape($n["field"]).process_type($n,"CHARACTER SET");}return"CREATE $fg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($p){global$Ke;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$p["source"])).") REFERENCES ".table($p["table"])." (".implode(", ",array_map('idf_escape',$p["target"])).")".(preg_match("~^($Ke)\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^($Ke)\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"");}function
tar_file($Hc,$mh){$J=pack("a100a8a8a8a12a12",$Hc,644,0,0,decoct($mh->size),decoct(time()));$eb=8*32;for($r=0;$r<strlen($J);$r++)$eb+=ord($J[$r]);$J.=sprintf("%06o",$eb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$mh->send();echo
str_repeat("\0",511-($mh->size+511)%512);}function
ini_bytes($rd){$X=ini_get($rd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($pf){global$w,$g;$Jh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($pf[$w]?"<a href='$Jh[$w]$pf[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($l){global$g;if(!$g->select_db($l))return"?";$J=0;foreach(table_status()as$R)$J+=$R["Data_length"]+$R["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$T,$m,$Wb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$m)queries_adm_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$m,false);echo"<p class='links'>\n";foreach(array('database'=>'Create new database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Wb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$k=$b->databases();if($k){$mg=support("scheme");$mb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'." - <a href='".h(ME)."refresh=1'>".'Refresh'."</a>"."<td>".'Collation'."<td>".'Tables'."<td>".'Size'." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".js_escape(ME)."script=connect');\">".'Compute'."</a>"."</thead>\n";$k=($_GET["dbsize"]?count_tables($k):array_flip($k));foreach($k
as$l=>$S){$eg=h(ME)."db=".urlencode($l);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$l,in_array($l,(array)$_POST["db"])):""),"<th><a href='$eg'>".h($l)."</a>";$d=nbsp(db_collation($l,$mb));echo"<td>".(support("database")?"<a href='$eg".($mg?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$eg&amp;schema=' id='tables-".h($l)."' title='".'Database schema'."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($l)."'>".($_GET["dbsize"]?db_size($l):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))adm_redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}$Ke="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($wb){$this->size+=strlen($wb);fwrite($this->handler,$wb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$oc="'(?:''|[^'\\\\]|\\\\.)*'";$sd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$o=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Vb->select($a,$M,array(where($_GET,$o)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$o=fields($a);if(!$o)$m=error();$R=table_status1($a,true);page_header(($o&&is_adm_view($R)?'View':'Table').": ".h($a),$m);$b->selectLinks($R);$qb=$R["Comment"];if($qb!="")echo"<p>".'Comment'.": ".h($qb)."\n";if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($o
as$n){echo"<tr".odd()."><th>".h($n["field"]),"<td><span title='".h($n["collation"])."'>".h($n["full_type"])."</span>",($n["null"]?" <i>NULL</i>":""),($n["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($n["default"])?" <span title='".'Default value'."'>[<b>".h($n["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($n["comment"]):""),"\n";}echo"</table>\n";}if(!is_adm_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$Bf=array();foreach($u["columns"]as$x=>$X)$Bf[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$Bf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Nc=foreign_keys($a);if($Nc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Nc
as$C=>$p){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$p["source"]))."</i>","<td><a href='".h($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($p["ns"]),ME):ME))."table=".urlencode($p["table"])."'>".($p["db"]!=""?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$p["target"]))."</i>)","<td>".nbsp($p["on_delete"])."\n","<td>".nbsp($p["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_adm_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$wh=triggers($a);if($wh){echo"<table cellspacing='0'>\n";foreach($wh
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Sg=array();$Tg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$be,PREG_SET_ORDER);foreach($be
as$r=>$B){$Sg[$B[1]]=array($B[2],$B[3]);$Tg[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$oh=0;$Pa=-1;$lg=array();$Tf=array();$Rd=array();foreach(table_status('',true)as$Q=>$R){if(is_adm_view($R))continue;$uf=0;$lg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$n){$uf+=1.25;$n["pos"]=$uf;$lg[$Q]["fields"][$C]=$n;}$lg[$Q]["pos"]=($Sg[$Q]?$Sg[$Q]:array($oh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Pd=$Pa;if($Sg[$Q][1]||$Sg[$X["table"]][1])$Pd=min(floatval($Sg[$Q][1]),floatval($Sg[$X["table"]][1]))-1;else$Pa-=.1;while($Rd[(string)$Pd])$Pd-=.0001;$lg[$Q]["references"][$X["table"]][(string)$Pd]=array($X["source"],$X["target"]);$Tf[$X["table"]][$Q][(string)$Pd]=$X["target"];$Rd[(string)$Pd]=true;}}$oh=max($oh,$lg[$Q]["pos"][0]+2.5+$uf);}echo'<div id="schema" style="height: ',$oh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Tg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$oh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($lg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$n){$X='<span'.type_class($n["type"]).' title="'.h($n["full_type"].($n["null"]?" NULL":'')).'">'.h($n["field"]).'</span>';echo"<br>".($n["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Zg=>$Uf){foreach($Uf
as$Pd=>$Qf){$Qd=$Pd-$Sg[$C][1];$r=0;foreach($Qf[0]as$Ag)echo"\n<div class='references' title='".h($Zg)."' id='refs$Pd-".($r++)."' style='left: $Qd"."em; top: ".$Q["fields"][$Ag]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Qd)."em;'></div></div>";}}foreach((array)$Tf[$C]as$Zg=>$Uf){foreach($Uf
as$Pd=>$f){$Qd=$Pd-$Sg[$C][1];$r=0;foreach($f
as$Yg)echo"\n<div class='references' title='".h($Zg)."' id='refd$Pd-".($r++)."' style='left: $Qd"."em; top: ".$Q["fields"][$Yg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.2.2'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Qd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($lg
as$C=>$Q){foreach((array)$Q["references"]as$Zg=>$Uf){foreach($Uf
as$Pd=>$Qf){$qe=$oh;$fe=-10;foreach($Qf[0]as$x=>$Ag){$vf=$Q["pos"][0]+$Q["fields"][$Ag]["pos"];$wf=$lg[$Zg]["pos"][0]+$lg[$Zg]["fields"][$Qf[1][$x]]["pos"];$qe=min($qe,$vf,$wf);$fe=max($fe,$vf,$wf);}echo"<div class='references' id='refl$Pd' style='left: $Pd"."em; top: $qe"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($fe-$qe)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$m){$zb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$zb.="&$x=".urlencode($_POST[$x]);adm_cookie("adminer_export",substr($zb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$_c=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$_d=preg_match('~sql~',$_POST["format"]);if($_d){echo"-- Adminer $ia ".$Wb[DRIVER]." dump\n\n";if($w=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$Jg=$_POST["db_style"];$k=array(DB);if(DB==""){$k=$_POST["databases"];if(is_string($k))$k=explode("\n",rtrim(str_replace("\r","",$k),"\n"));}foreach((array)$k
as$l){$b->dumpDatabase($l);if($g->select_db($l)){if($_d&&preg_match('~CREATE~',$Jg)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($l),1))){set_utf8mb4($i);if($Jg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($l).";\n";echo"$i;\n";}if($_d){if($Jg)echo
use_sql($l).";\n\n";$df="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$fg){foreach(get_rows("SHOW $fg STATUS WHERE Db = ".q($l),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $fg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$df.=($Jg!='DROP+CREATE'?"DROP $fg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$df.=($Jg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($df)echo"DELIMITER ;;\n\n$df"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Vh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Db=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Db){if($_c=="tar"){$mh=new
TmpFile;ob_start(array($mh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_adm_view($R)?2:0));if(is_adm_view($R))$Vh[]=$C;elseif($Db){$o=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($o,$o)." FROM ".table($C));}if($_d&&$_POST["triggers"]&&$Q&&($wh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$wh\nDELIMITER ;\n";if($_c=="tar"){ob_end_flush();tar_file((DB!=""?"":"$l/")."$C.csv",$mh);}elseif($_d)echo"\n";}}foreach($Vh
as$Uh)$b->dumpTable($Uh,$_POST["table_style"],1);if($_c=="tar")echo
pack("x512");}}}if($_d)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$m,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Hb=array('','USE','DROP+CREATE','CREATE');$Ug=array('','DROP+CREATE','CREATE');$Eb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Eb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Hb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Ug,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Eb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$zf=array();if(DB!=""){$cb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$cb onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$cb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Vh="";$Vg=tables_list();foreach($Vg
as$C=>$U){$yf=preg_replace('~_.*~','',$C);$cb=($a==""||$a==(substr($a,-1)=="%"?"$yf%":$C));$Bf="<tr><td>".checkbox("tables[]",$C,$cb,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Vh.="$Bf\n";else
echo"$Bf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$cb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$zf[$yf]++;}echo$Vh;if($Vg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$k=$b->databases();if($k){foreach($k
as$l){if(!information_schema($l)){$yf=preg_replace('~_.*~','',$l);echo"<tr><td>".checkbox("databases[]",$l,$a==""||$a=="$yf%",$l,"formUncheck('check-databases');","block")."\n";$zf[$yf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Jc=true;foreach($zf
as$x=>$X){if($x!=""&&$X>1){echo($Jc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Jc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Uc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Uc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$Uc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$m&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$ed=&get_session("queries");$dd=&$ed[DB];if(!$m&&$_POST["clear"]){$dd=array();adm_redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$m);if(!$m&&$_POST){$Rc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Rc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Rc?fread($Rc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$If=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$dd||reset(end($dd))!=$If){restart_session();$dd[]=array($If,time());set_session("queries",$ed);stop_session();}}$Bg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\r?\n)";$Mb=";";$D=0;$lc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$pb=0;$qc=array();$Vd=0;$if='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$ph=microtime(true);parse_str($_COOKIE["adminer_export"],$wa);$cc=$b->dumpFormat();unset($cc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Bg*DELIMITER\\s+(\\S+)~i",$H,$B)){$Mb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Mb)."\\s*|$if)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Pc,$uf)=$B[0];if(!$Pc&&$Rc&&!feof($Rc))$H.=fread($Rc,1e5);else{if(!$Pc&&rtrim($H)=="")break;$D=$uf+strlen($Pc);if($Pc&&rtrim($Pc)!=$Mb){while(preg_match('('.($Pc=='/*'?'\\*/':($Pc=='['?']':(preg_match('~^-- |^#~',$Pc)?"\n":preg_quote($Pc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$jg=$B[0][0];if(!$jg&&$Rc&&!feof($Rc))$H.=fread($Rc,1e5);else{$D=$B[0][1]+strlen($jg);if($jg[0]!="\\")break;}}}else{$lc=false;$If=substr($H,0,$uf);$pb++;$Bf="<pre id='sql-$pb'><code class='jush-$w'>".shorten_utf8(trim($If),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Bf;ob_flush();flush();}$Eg=microtime(true);if($g->multi_query($If)&&is_object($h)&&preg_match("~^$Bg*USE\\b~isU",$If))$h->query($If);do{$I=$g->store_result();$fh=" <span class='time'>(".format_time($Eg).")</span>".(strlen($If)<1000?" <a href='".h(ME)."sql=".urlencode(trim($If))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$Bf:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$qc[]=" <a href='#sql-$pb'>$pb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$Xe=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Ae=$I->num_rows;echo"<p>".($Ae?($z&&$Ae>$z?sprintf('%d / ',$z):"").lang(array('%d row','%d rows'),$Ae):""),$fh;$s="export-$pb";$zc=", <a href='#$s' onclick=\"return !toggle('$s');\">".'Export'."</a><span id='$s' class='hidden'>: ".html_select("output",$b->dumpOutput(),$wa["output"])." ".html_select("format",$cc,$wa["format"])."<input type='hidden' name='query' value='".h($If)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($Bg|\\()*SELECT\\b~isU",$If)&&($yc=explain($h,$If))){$s="explain-$pb";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$zc","<div id='$s' class='hidden'>\n";select($yc,$h,$Xe);echo"</div>\n";}else
echo$zc;echo"</form>\n";}}else{if(preg_match("~^$Bg*(CREATE|DROP|ALTER)$Bg+(DATABASE|SCHEMA)\\b~isU",$If)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$fh\n";}$Eg=microtime(true);}while($g->next_result());$Vd+=substr_count($If.$Pc,"\n");$H=substr($H,$D);$D=0;}}}}if($lc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$pb-count($qc))," <span class='time'>(".format_time($ph).")</span>\n";}elseif($qc&&$pb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$qc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$vc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$If=$_GET["sql"];if($_POST)$If=$_POST["query"];elseif($_GET["history"]=="all")$If=$dd;elseif($_GET["history"]!="")$If=$dd[$_GET["history"]][0];echo"<p>";textarea("query",$If,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$vc\n",'Limit rows'.": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$vc":'File uploads are disabled.'),"</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Show only errors')."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$dd){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($dd);$X;$X=prev($dd)){$x=key($dd);list($If,$fh,$gc)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.'Edit'."</a>"." <span class='time' title='".@date('Y-m-d',$fh)."'>".@date("H:i:s",$fh)."</span>"." <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$If)))),80,"</code>").($gc?" <span class='time'>($gc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$o=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$o):""):where($_GET,$o));$Gh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($o
as$C=>$n){if(!isset($n["privileges"][$Gh?"update":"insert"])||$b->fieldName($n)=="")unset($o[$C]);}if($_POST&&!$m&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Gh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$Bh=unique_array($_GET["where"],$v);$Lf="\nWHERE $Z";if(isset($_POST["delete"]))queries_adm_redirect($A,'Item has been deleted.',$Vb->delete($a,$Lf,!$Bh));else{$O=array();foreach($o
as$C=>$n){$X=process_input($n);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Gh){if(!$O)adm_redirect($A);queries_adm_redirect($A,'Item has been updated.',$Vb->update($a,$O,$Lf,!$Bh));if(is_ajax()){page_headers();page_messages($m);exit;}}else{$I=$Vb->insert($a,$O);$Od=($I?last_id():0);queries_adm_redirect($A,sprintf('Item%s has been inserted.',($Od?" $Od":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($o
as$C=>$n){if(isset($n["privileges"]["select"])){$Fa=convert_field($n);if($_POST["clone"]&&$n["auto_increment"])$Fa="''";if($w=="sql"&&preg_match("~enum|set~",$n["type"]))$Fa="1*".idf_escape($C);$M[]=($Fa?"$Fa AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Vb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$o){if(!$Z){$I=$Vb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Vb->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$o[$x]=array("field"=>$x,"null"=>($x!=$Vb->primary),"auto_increment"=>($x==$Vb->primary));}}}edit_form($a,$o,$K,$Gh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$jf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$jf[$x]=$x;$Sf=referencable_primary($a);$Nc=array();foreach($Sf
as$Qg=>$n)$Nc[str_replace("`","``",$Qg)."`".str_replace("`","``",$n["field"])]=$Qg;$af=array();$R=array();if($a!=""){$af=fields($a);$R=table_status($a);if(!$R)$m='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$m){if($_POST["drop"])queries_adm_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$o=array();$Ca=array();$Kh=false;$Lc=array();ksort($K["fields"]);$Ze=reset($af);$_a=" FIRST";foreach($K["fields"]as$x=>$n){$p=$Nc[$n["type"]];$xh=($p!==null?$Sf[$p]:$n);if($n["field"]!=""){if(!$n["has_default"])$n["default"]=null;if($x==$K["auto_increment_col"])$n["auto_increment"]=true;$Gf=process_field($n,$xh);$Ca[]=array($n["orig"],$Gf,$_a);if($Gf!=process_field($Ze,$Ze)){$o[]=array($n["orig"],$Gf,$_a);if($n["orig"]!=""||$_a)$Kh=true;}if($p!==null)$Lc[idf_escape($n["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Nc[$n["type"]],'source'=>array($n["field"]),'target'=>array($xh["field"]),'on_delete'=>$n["on_delete"],));$_a=" AFTER ".idf_escape($n["field"]);}elseif($n["orig"]!=""){$Kh=true;$o[]=array($n["orig"]);}if($n["orig"]!=""){$Ze=next($af);if(!$Ze)$_a="";}}$lf="";if($jf[$K["partition_by"]]){$mf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$mf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$lf.="\nPARTITION BY $K[partition_by]($K[partition])".($mf?" (".implode(",",$mf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$lf.="\nREMOVE PARTITIONING";$je='Table has been altered.';if($a==""){adm_cookie("adminer_engine",$K["Engine"]);$je='Table has been created.';}$C=trim($K["name"]);queries_adm_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$je,alter_table($a,$C,($w=="sqlite"&&($Kh||$Lc)?$Ca:$o),$Lc,($K["Comment"]!=$R["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$lf));}}page_header(($a!=""?'Alter table':'Create table'),$m,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($zh["int"])?"int":(isset($zh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($af
as$n){$n["has_default"]=isset($n["default"]);$K["fields"][]=$n;}if(support("partitioning")){$Sc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Sc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$mf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Sc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$mf[""]="";$K["partition_names"]=array_keys($mf);$K["partition_values"]=array_values($mf);}}}$mb=collations();$nc=engines();foreach($nc
as$mc){if(!strcasecmp($mc,$K["Engine"])){$K["Engine"]=$mc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($nc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'engine'.")")+$nc,$K["Engine"])."</select>":""),' ',($mb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".'collation'.")")+$mb,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$rb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$rb){foreach($K["fields"]as$n){if($n["comment"]!=""){$rb=true;break;}}}edit_fields($K["fields"],$mb,"TABLE",$Nc,$rb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($rb?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($rb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$kf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$jf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($kf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($kf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$nd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$nd[]="FULLTEXT";$v=indexes($a);$_f=array();if($w=="mongo"){$_f=$v["_id_"];unset($nd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$nd)){$f=array();$Td=array();$Ob=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Nb=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Nb?" DESC":"");$f[]=$e;$Td[]=($y?$y:null);$Ob[]=$Nb;}}if($f){$wc=$v[$C];if($wc){ksort($wc["columns"]);ksort($wc["lengths"]);ksort($wc["descs"]);if($u["type"]==$wc["type"]&&array_values($wc["columns"])===$f&&(!$wc["lengths"]||array_values($wc["lengths"])===$Td)&&array_values($wc["descs"])===$Ob){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$wc)$c[]=array($wc["type"],$C,"DROP");if(!$c)adm_redirect(ME."table=".urlencode($a));queries_adm_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$m,array("table"=>$a),h($a));$o=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>Index Type
<th><input type="submit" style="left: -1000px; position: absolute;">Column (length)
<th>Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.2.2' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($_f){echo"<tr><td>PRIMARY<td>";foreach($_f["columns"]as$x=>$e){echo
select_input(" disabled",$o,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$Dd=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$Dd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Dd][type]",array(-1=>"")+$nd,$u["type"],($Dd==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$r=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$Dd][columns][$r]' onchange=\"".($r==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');\"",($o?array_combine($o,$o):$o),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$Dd][lengths][$r]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$Dd][descs][$r]",1,$u["descs"][$x],'descending'):"")," </span>";$r++;}echo"<td><input name='indexes[$Dd][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$Dd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.2' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Dd++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$m&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_adm_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_adm_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'Database has been renamed.',rename_database($C,$K["collation"]));}else{$k=explode("\n",str_replace("\r","",$C));$Kg=true;$Nd="";foreach($k
as$l){if(count($k)==1||$l!=""){if(!create_database($l,$K["collation"]))$Kg=false;$Nd=$l;}}restart_session();set_session("dbs",null);queries_adm_redirect(ME."db=".urlencode($Nd),'Database has been created.',$Kg);}}else{if(!$K["collation"])adm_redirect(substr(ME,0,-1));query_adm_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$m,array(),h(DB));$mb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$mb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Uc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Uc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($mb?html_select("collation",array(""=>"(".'collation'.")")+$mb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.2' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$m){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_adm_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,'Schema has been dropped.');else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_adm_redirect("CREATE SCHEMA ".idf_escape($C),$_,'Schema has been created.');elseif($_GET["ns"]!=$C)query_adm_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,'Schema has been altered.');else
adm_redirect($_);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$m);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$m);$fg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$ld=array();$df=array();foreach($fg["fields"]as$r=>$n){if(substr($n["inout"],-3)=="OUT")$df[$r]="@".idf_escape($n["field"])." AS ".idf_escape($n["field"]);if(!$n["inout"]||substr($n["inout"],0,2)=="IN")$ld[]=$r;}if(!$m&&$_POST){$Xa=array();foreach($fg["fields"]as$x=>$n){if(in_array($x,$ld)){$X=process_input($n);if($X===false)$X="''";if(isset($df[$x]))$g->query("SET @".idf_escape($n["field"])." = $X");}$Xa[]=(isset($df[$x])?"@".idf_escape($n["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Xa).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($df)select($g->query("SELECT ".implode(", ",$df)));}}echo'
<form action="" method="post">
';if($ld){echo"<table cellspacing='0'>\n";foreach($ld
as$x){$n=$fg["fields"][$x];$C=$n["field"];echo"<tr><th>".$b->fieldName($n);$Y=$_POST["fields"][$C];if($Y!=""){if($n["type"]=="enum")$Y=+$Y;if($n["type"]=="set")$Y=array_sum($Y);}input($n,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$je=($_POST["drop"]?'Foreign key has been dropped.':($C!=""?'Foreign key has been altered.':'Foreign key has been created.'));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Yg=array();foreach($K["source"]as$x=>$X)$Yg[$x]=$K["target"][$x];$K["target"]=$Yg;if($w=="sqlite")queries_adm_redirect($A,$je,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Xb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_adm_redirect($c.$Xb,$A,$je);else{query_adm_redirect($c.($C!=""?"$Xb,":"")."\nADD".format_foreign_key($K),$A,$je);$m='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$m";}}}page_header('Foreign key',$m,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Nc=foreign_keys($a);$K=$Nc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Ag=array_keys(fields($a));$Yg=($a===$K["table"]?$Ag:array_keys(fields($K["table"])));$Rf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$Rf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$Dd=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Ag,$X,($Dd==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Yg,$K["target"][$x]);$Dd++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Ke),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Ke),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$m){$C=trim($K["name"]);$Fa=" AS\n$K[select]";$A=ME."table=".urlencode($C);$je='View has been altered.';if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($w=="pgsql"){$Fg=table_status($C);$U=($Fg?strtoupper($Fg["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$C&&$w!="sqlite"&&$U!="MATERIALIZED VIEW")query_adm_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Fa,$A,$je);else{$ah=$C."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($C).$Fa,"DROP $U ".table($C),"CREATE $U ".table($ah).$Fa,"DROP $U ".table($ah),($_POST["drop"]?substr(ME,0,-1):$A),'View has been dropped.',$je,'View has been created.',$a,$C);}}if(!$_POST&&$a!=""){$K=adm_view($a);$K["name"]=$a;if(!$m)$m=error();}page_header(($a!=""?'Alter view':'Create view'),$m,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$vd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Gg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$m){if($_POST["drop"])query_adm_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$vd)&&isset($Gg[$K["STATUS"]])){$kg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_adm_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$kg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$kg)."\n".$Gg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$m);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$vd,$K["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Gg,$K["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$fg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$m){$ah="$K[name]_adminer_".uniqid();drop_create("DROP $fg ".idf_escape($da),create_routine($fg,$K),"DROP $fg ".idf_escape($K["name"]),create_routine($fg,array("name"=>$ah)+$K),"DROP $fg ".idf_escape($ah),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$m);if(!$_POST&&$da!=""){$K=routine($da,$fg);$K["name"]=$da;}$mb=get_vals("SHOW CHARACTER SET");sort($mb);$gg=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($gg?'Language'.": ".html_select("language",$gg,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$mb,$fg);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$mb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_adm_redirect("DROP SEQUENCE ".idf_escape($fa),$_,'Sequence has been dropped.');elseif($fa=="")query_adm_redirect("CREATE SEQUENCE ".idf_escape($C),$_,'Sequence has been created.');elseif($fa!=$C)query_adm_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,'Sequence has been altered.');else
adm_redirect($_);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$m);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);if($_POST["drop"])query_adm_redirect("DROP TYPE ".idf_escape($ga),$_,'Type has been dropped.');else
query_adm_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$m);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$vh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$m&&in_array($_POST["Timing"],$vh["Timing"])&&in_array($_POST["Event"],$vh["Event"])&&in_array($_POST["Type"],$vh["Type"])){$Je=" ON ".table($a);$Xb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Je:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_adm_redirect($Xb,$A,'Trigger has been dropped.');else{if($C!="")queries($Xb);queries_adm_redirect($A,($C!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Je,$_POST)));if($C!="")queries(create_trigger($Je,$K+array("Type"=>reset($vh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'Alter trigger'.": ".h($C):'Create trigger'),$m,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$vh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>Event<td>',html_select("Event",$vh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$vh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>Type<td>',html_select("Type",$vh["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Ef=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$xb)$Ef[$xb][$K["Privilege"]]=$K["Comment"];}$Ef["Server Admin"]+=$Ef["File access on server"];$Ef["Databases"]["Create routine"]=$Ef["Procedures"]["Create routine"];unset($Ef["Procedures"]["Create routine"]);$Ef["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Ef["Columns"][$X]=$Ef["Tables"][$X];unset($Ef["Server Admin"]["Usage"]);foreach($Ef["Tables"]as$x=>$X)unset($Ef["Databases"][$x]);$we=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$we[$X]=(array)$we[$X]+(array)$_POST["grants"][$x];}$Vc=array();$He="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$be,PREG_SET_ORDER)){foreach($be
as$X){if($X[1]!="USAGE")$Vc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Vc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$He=$B[1];}}if($_POST&&!$m){$Ie=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_adm_redirect("DROP USER $Ie",ME."privileges=",'User has been dropped.');else{$ye=q($_POST["user"])."@".q($_POST["host"]);$nf=$_POST["pass"];if($nf!=''&&!$_POST["hashed"]){$nf=$g->result("SELECT PASSWORD(".q($nf).")");$m=!$nf;}$Bb=false;if(!$m){if($Ie!=$ye){$Bb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $ye IDENTIFIED BY PASSWORD ".q($nf));$m=!$Bb;}elseif($nf!=$He)queries("SET PASSWORD FOR $ye = ".q($nf));}if(!$m){$cg=array();foreach($we
as$Ce=>$Uc){if(isset($_GET["grant"]))$Uc=array_filter($Uc);$Uc=array_keys($Uc);if(isset($_GET["grant"]))$cg=array_diff(array_keys(array_filter($we[$Ce],'strlen')),$Uc);elseif($Ie==$ye){$Fe=array_keys((array)$Vc[$Ce]);$cg=array_diff($Fe,$Uc);$Uc=array_diff($Uc,$Fe);unset($Vc[$Ce]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ce,$B)&&(!grant("REVOKE",$cg,$B[2]," ON $B[1] FROM $ye")||!grant("GRANT",$Uc,$B[2]," ON $B[1] TO $ye"))){$m=true;break;}}}if(!$m&&isset($_GET["host"])){if($Ie!=$ye)queries("DROP USER $Ie");elseif(!isset($_GET["grant"])){foreach($Vc
as$Ce=>$cg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ce,$B))grant("REVOKE",array_keys($cg),$B[2]," ON $B[1] FROM $ye");}}}queries_adm_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$m);if($Bb)$g->query("DROP USER $ye");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$m,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$Vc=$we;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$He;if($He!="")$K["hashed"]=true;$Vc[(DB==""||$Vc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$r=0;foreach($Vc
as$Ce=>$Uc){echo'<th>'.($Ce!="*.*"?"<input name='objects[$r]' value='".h($Ce)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$xb=>$Nb){foreach((array)$Ef[$xb]as$Df=>$qb){echo"<tr".odd()."><td".($Nb?">$Nb<td":" colspan='2'").' lang="en" title="'.h($qb).'">'.h($Df);$r=0;foreach($Vc
as$Ce=>$Uc){$C="'grants[$r][".h(strtoupper($Df))."]'";$Y=$Uc[strtoupper($Df)];if($xb=="Server Admin"&&$Ce!=(isset($Vc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Df=="All privileges"?" id='grants-$r-all'":($Df=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\""))."></label>";$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$m){$Kd=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".number($X)))$Kd++;}queries_adm_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Kd),$Kd||!$_POST["kill"]);}page_header('Process list',$m);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$K){if(!$r){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$o=fields($a);$Nc=column_foreign_keys($a);$Ee="";if($R["Oid"]){$Ee=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($Ee));}parse_str($_COOKIE["adminer_import"],$xa);$dg=array();$f=array();$eh=null;foreach($o
as$x=>$n){$C=$b->fieldName($n);if(isset($n["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($n))$eh=$b->selectLengthProcess();}$dg+=$n["privileges"];}list($M,$Wc)=$b->selectColumnsProcess($f,$v);$zd=count($Wc)<count($M);$Z=$b->selectSearchProcess($o,$v);$Ue=$b->selectOrderProcess($o,$v);$z=$b->selectLimitProcess();$Sc=($M?implode(", ",$M):"*".($Ee?", $Ee":"")).convert_fields($f,$o,$M)."\nFROM ".table($a);$Xc=($Wc&&$zd?"\nGROUP BY ".implode(", ",$Wc):"").($Ue?"\nORDER BY ".implode(", ",$Ue):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ch=>$K){$Fa=convert_field($o[key($K)]);$M=array($Fa?$Fa:idf_escape(key($K)));$Z[]=where_check($Ch,$o);$J=$Vb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$m){$Zh=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$db=array();foreach($_POST["check"]as$ab)$db[]=where_check($ab,$o);$Zh[]="((".implode(") OR (",$db)."))";}$Zh=($Zh?"\nWHERE ".implode(" AND ",$Zh):"");$_f=$Eh=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$_f=array_flip($u["columns"]);$Eh=($M?$_f:array());break;}}foreach((array)$Eh
as$x=>$X){if(in_array(idf_escape($x),$M))unset($Eh[$x]);}if($_POST["export"]){adm_cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Eh===array())$H="SELECT $Sc$Zh$Xc";else{$Ah=array();foreach($_POST["check"]as$X)$Ah[]="(SELECT".limit($Sc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o).$Xc,1).")";$H=implode(" UNION ALL ",$Ah);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Nc)){if($_POST["save"]||$_POST["delete"]){$I=true;$ya=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($o[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Eh===array()&&is_array($_POST["check"]))||$zd){$I=($_POST["delete"]?$Vb->delete($a,$Zh):($_POST["clone"]?queries("INSERT $H$Zh"):$Vb->update($a,$O,$Zh)));$ya=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Yh="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o);$I=($_POST["delete"]?$Vb->delete($a,$Yh,1):($_POST["clone"]?queries("INSERT".limit1($H,$Yh)):$Vb->update($a,$O,$Yh)));if(!$I)break;$ya+=$g->affected_rows;}}}$je=lang(array('%d item has been affected.','%d items have been affected.'),$ya);if($_POST["clone"]&&$I&&$ya==1){$Od=last_id();if($Od)$je=sprintf('Item%s has been inserted.'," $Od");}queries_adm_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$je,$I);if(!$_POST["delete"]){edit_form($a,$o,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$m='Ctrl+click on a value to modify it.';else{$I=true;$ya=0;foreach($_POST["val"]as$Ch=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$o[$x]["type"])||$X!=""?$b->processInput($o[$x],$X):"NULL");}$I=$Vb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Ch,$o),!($zd||$Eh===array())," ");if(!$I)break;$ya+=$g->affected_rows;}queries_adm_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ya),$I);}}elseif(!is_string($Gc=get_file("csv_file",true)))$m=upload_error($Gc);elseif(!preg_match('~~u',$Gc))$m='File must be in UTF-8 encoding.';else{adm_cookie("adminer_import","output=".urlencode($xa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$nb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Gc,$be);$ya=count($be[0]);$Vb->begin();$sg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($be[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$sg]*)$sg~",$X.$sg,$ce);if(!$x&&!array_diff($ce[1],$nb)){$nb=$ce[1];$ya--;}else{$O=array();foreach($ce[1]as$r=>$kb)$O[idf_escape($nb[$r])]=($kb==""&&$o[$nb[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$kb))));$L[]=$O;}}$I=(!$L||$Vb->insertUpdate($a,$L,$_f));if($I)$Vb->commit();queries_adm_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ya),$I);$Vb->rollback();}}}$Qg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Qg",$m);$O=null;if(isset($dg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Nc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($o?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($Ue,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($eh);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Qc=$g->result(count_rows($a,$Z,$zd,$Wc));$E=floor(max(0,$Qc-1)/$z);}$pg=$M;if(!$pg){$pg[]="*";if($Ee)$pg[]=$Ee;}$yb=convert_fields($f,$o,$M);if($yb)$pg[]=substr($yb,2);$I=$Vb->select($a,$pg,$Z,$Wc,$Ue,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$kc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Wc&&$zd&&$w=="sql")$Qc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Oa=$b->backwardKeys($a,$Qg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Wc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$ve=array();$Tc=array();reset($M);$Nf=1;foreach($L[0]as$x=>$X){if($x!=$Ee){$X=$_GET["columns"][key($M)];$n=$o[$M?($X?$X["col"]:current($M)):$x];$C=($n?$b->fieldName($n,$Nf):($X["fun"]?"*":$x));if($C!=""){$Nf++;$ve[$x]=$C;$e=idf_escape($x);$hd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Nb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($hd.($Ue[0]==$e||$Ue[0]==$x||(!$Ue&&$zd&&$Wc[0]==$e)?$Nb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($hd.$Nb)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Tc[$x]=$X["fun"];next($M);}}$Td=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Td[$x]=max($Td[$x],min(40,strlen(utf8_decode($X))));}}echo($Oa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Nc)as$ue=>$K){$Bh=unique_array($L[$ue],$v);if(!$Bh){$Bh=array();foreach($L[$ue]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$Bh[$x]=$X;}}$Ch="";foreach($Bh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($w=='sql'&&preg_match("~^utf8_~",$o[$x]["collation"])?$x:"CONVERT($x USING ".charset($g).")").")";$X=md5($X);}$Ch.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Wc&&$M?"":"<td>".checkbox("check[]",substr($Ch,1),in_array(substr($Ch,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($zd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Ch)."'>".'edit'."</a>"));foreach($K
as$x=>$X){if(isset($ve[$x])){$n=$o[$x];if($X!=""&&(!isset($kc[$x])||$kc[$x]!=""))$kc[$x]=(is_mail($X)?$ve[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$n["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$Ch;if(!$_&&$X!==null){foreach((array)$Nc[$x]as$p){if(count($Nc[$x])==1||end($p["source"])==$x){$_="";foreach($p["source"]as$r=>$Ag)$_.=where_link($r,$p["target"][$r],$L[$ue][$Ag]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$_;if(count($p["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Bh))$_.=where_link($r++,$W["col"],$W["val"],$W["op"]);}foreach($Bh
as$Ed=>$W)$_.=where_link($r++,$Ed,$W);}$X=select_value($X,$_,$n,$eh);$s=h("val[$Ch][".bracket_escape($x)."]");$Y=$_POST["val"][$Ch][bracket_escape($x)];$fc=!is_array($K[$x])&&is_utf8($X)&&$L[$ue][$x]==$K[$x]&&!$Tc[$x];$dh=preg_match('~text|lob~',$n["type"]);if(($_GET["modify"]&&$fc)||$Y!==null){$Zc=h($Y!==null?$Y:$K[$x]);echo"<td>".($dh?"<textarea name='$s' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$Zc</textarea>":"<input name='$s' value='$Zc' size='$Td[$x]'>");}else{$Yd=strpos($X,"<i>...</i>");echo"<td id='$s' onclick=\"selectClick(this, event, ".($Yd?2:($dh?1:0)).($fc?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Oa)echo"<td>";$b->backwardKeysPrint($Oa,$L[$ue]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$uc=true;if($_GET["page"]!="last"){if(!+$z)$Qc=count($L);elseif($w!="sql"||!$zd){$Qc=($zd?false:found_rows($R,$Z));if($Qc<max(1e4,2*($E+1)*$z))$Qc=reset(slow_query(count_rows($a,$Z,$zd,$Wc)));else$uc=false;}}if(+$z&&($Qc===false||$Qc>$z||$E)){echo"<p class='pages'>";$ee=($Qc===false?$E+(count($L)>=$z?2:1):floor(($Qc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($r=max(1,$E-4);$r<min($ee,$E+5);$r++)echo
pagination($r,$E);if($ee>0){echo($E+5<$ee?" ...":""),($uc&&$Qc!==false?pagination($ee,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ee'>".'last'."</a>");}echo(($Qc===false?count($L)+1:$Qc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'...\');" class="loadmore">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ee>$E?pagination($E+1,$E).($ee>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Qc!==false?"(".($uc?"":"~ ").lang(array('%d row','%d rows'),$Qc).") ":"");$Sb=($uc?"":"~ ").$Qc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Sb' : checked); selectCount('selected2', this.checked || !checked ? '$Sb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Oc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Oc['sql']);break;}}if($Oc){print_fieldset("export",'Export'." <span id='selected2'></span>");$ef=$b->dumpOutput();echo($ef?html_select("output",$ef,$xa["output"])." ":""),html_select("format",$Oc,$xa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$Wc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$xa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($kc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Fg=isset($_GET["status"]);page_header($Fg?'Status':'Variables');$Rh=($Fg?show_status():show_variables());if(!$Rh)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Rh
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Fg?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Ng=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){json_row("Comment-$C",nbsp($R["Comment"]));if(!is_adm_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$C",nbsp($R[$x]));foreach($Ng+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=format_number($R[$x]);json_row("$x-$C",($x=="Rows"&&$X&&$R["Engine"]==($Cg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Ng[$x]))$Ng[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$C");}}}foreach($Ng
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$l=>$X){json_row("tables-$l",$X);json_row("size-$l",db_size($l));}json_row("");}exit;}else{$Wg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Wg&&!$m&&!$_POST["search"]){$I=true;$je="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$je='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$je='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$je='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$je='Tables have been dropped.';}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$je='Tables have been optimized.';}elseif(!$_POST["tables"])$je='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$je.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_adm_redirect(substr(ME,0,-1),$je,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$m,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Vg=tables_list();if(!$Vg)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Tb=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.'Table','<td>'.'Engine'.doc_link(array('sql'=>'storage-engines.html')),'<td>'.'Collation'.doc_link(array('sql'=>'charset-mysql.html')),'<td>'.'Data Length'.$Tb,'<td>'.'Index Length'.$Tb,'<td>'.'Data Free'.$Tb,'<td>'.'Auto Increment'.doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.'Rows'.$Tb,(support("comment")?'<td>'.'Comment'.$Tb:''),"</thead>\n";$S=0;foreach($Vg
as$C=>$U){$Uh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Uh?"views[]":"tables[]"),$C,in_array($C,$Wg,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.'Show structure'.'">'.h($C).'</a>':h($C));if($Uh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Alter view'.'">'.(preg_match('~materialized~i',$U)?'Materialized View':'View').'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$x=>$_){$s=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$s title='$_[1]'>?</a>":"<span$s>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Vg)),"<td>".nbsp($w=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Oh="<input type='submit' value='".'Vacuum'."'".on_help("'VACUUM'")."> ";$Qe="<input type='submit' name='optimize' value='".'Optimize'."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($w=="sqlite"?$Oh:($w=="pgsql"?$Oh.$Qe:($w=="sql"?"<input type='submit' value='".'Analyze'."'".on_help("'ANALYZE TABLE'")."> ".$Qe."<input type='submit' name='check' value='".'Check'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Repair'."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".'Truncate'."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".'Drop'."'".confirm().on_help("'DROP TABLE'").">\n";$k=(support("scheme")?$b->schemas():$b->databases());if(count($k)!=1&&$w!="sqlite"){$l=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($k?html_select("target",$k,$l):'<input name="target" value="'.h($l).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.'Create materialized view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$hg=routines();if($hg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($hg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$tg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($tg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($tg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Mh=types();if($Mh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Mh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$sc=$g->result("SELECT @@event_scheduler");if($sc&&$sc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($sc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Vg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();