<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.5
*/error_reporting(6135);$Hc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Hc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Dh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Dh)$$X=$Dh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuDÙ\0ŞvœëŒ†V\0èV`Gç½uµE®Ö•ÂÁf“l˜h’@ï)0@šT•°7‹íÛÂ§RAÊÙ·ò´3Û˜Ğ«/QÇ]ª,sÖ{VR±¡öF«¡A˜„<¨v×¥î´%@9‚ÀF¢Õ5t‰%Ö+º/¢8;¾WÑäÚÇJïĞo:ÖNÿ`ø	•ÿš´hìÁ{Ü£•î ËÔ8ÔEuª&°W|É†„‰®Uú&\r\"ÔÁ»‰|-uÇ†…Në¶:nc²©fV­‹ÂÃè#U20å>\"®²Ç>Ì`œk]î-¯ÇxùSØÍ‡Ğ¢©‰‚êcâ¡óB’—}Ø&`ˆîr+E­“\$œyNıŒ±b,†´´Wx ş-9åÕrÓ,’ü`å+œïíËŠù’CœÓ)˜˜7Ûx\r¬şWµfMŒSR¼\\èz¦ÙQ²Ì“”uA¬ºê2±õ4îL&ËHi Âµ°²¹S\$)e³“æg rÈŒ©ƒ\$]ZëiYs¤õ×kW–n>µ7E1k8ĞdÃró®škÁı¢ëEŞÙÛwÂwcmTy¹•ë¿a›\$tx\rB´÷=Šö¢*”<Èƒ l¡fôKœ‘N/¶¼	ÃlÕáükH“õ8 .‘‘ù?f÷›Úÿã6†Ñ‡¼{gi/\"à@–K›ñ@2ãça|#,Z¤±‡	³ñwˆd¬™“²…¼å6w™^&Áêt™çœP±…¥Äù]À¼›.àãÚí¡TìîkroÀ‰÷\ro=—%æ×h`:\0á±‚ö«”|êŠ£«a“Ô®6*:ÍÓ*‡ÊrO-^–’ñén«Íó§MÆ}æ»÷ÆAya±İ\nƒu^ì–ÀrnO\r±»¡`şT~</ğ¶wÄyş}æ:›|£ÏĞûÖÌ¡6»¤×ø®Ÿvî\rc<·b#ûàô§†î–\$ùsµê|ç‡‡V)«h‹TCùñ(Ä½ñ£È}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("\nŠ…B	È 7œ„#)´Şv2ˆe2˜€Æl0œÎ`¨\0àa9M¢APšL\"›!¦SqÒ8 H\$B™Ğäi7åóŒ¶b7›Í…Øà¼f:›ŒgCI¼Ü 0›†S‘1M‚Èµ\\æN‘k’Ã	ŠT)Á@“I˜AY6Z-@Mh]Œ×ì\"è‚íxX\r¦Qt0á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ]vó‚ˆçrys™ğIš×âAÑ¬›¬²¡\0üA›Íçp¬€u·×ígĞW\ræs>Ğìi9šLF“a¤èyÇç³I´âu†§*}„e0›¨´zM.›O:rù¸£I’åk;H/ÆËà€È7Œc«–…Ã8Ê:%)ZZ!\"HÈ>¡K„º‹º¼Ğ?«„,Ï¯aêú¨È–3m°NÍ·ñEBK[Âñ¾ê2¸N2Šp8@8*ƒkÒ–ˆ²‚5#+²™\$iªnœÈîØİJ¤š™ÉNò8)Šr¢õ©\nT²§ŒrŠ/#HÎ7+ƒ Â<³+KğıMJ›ú7£¸@\"*˜Q3‹9ÀóÄõ?@´òÅ5ïôÖÌÂoü‹¼Äˆ¯³,ÎÎ6áÚüÈ\r(`æ·4R§N:+*‹hò‹<hbZ‚ƒjpª€äè©Òœ’îÉR.½ÊukTŒÃÍQ[½áD9UÃ£îÌ#|ˆÅã\rcYBım\\\rÁè`«Œøü¡Kj{J?Ğ .èeÒ•Ì°¸+]æÁ…Ã˜ä1¿±\0è:˜t…ã¾ZÕ”è9ÈHÎÛox^ÙvmALb²'{°ƒ5Î!!1¾†Ş<°…Ñğä3§@Ë3\rI“\\÷ÈÆ9(Nªs~ÃxOše	¨ò•Ã»ê:\rèn2ıí“ßˆ4eã>c~†!pd¡ºrØ·0Üÿápà7¦¢hÊ00@ÁÅ²a0Šˆ%¢c ©áv~¿šêL Èè0ó^x§ºğk›¼½&©b¨É0{d\rp¾·Œ»Å7.šÿ9Ïa©¾X§ÃÍ¾c€`X&\r²á6ÇJ3µİCrğè1é+î ª[èPaH^iƒ(Æ¬ô“ˆÃ>t+jßİw›÷ChÚl—c…Û^ß‹³¾ Ğ-†\"íÃè.'Cõ#ê¸3*4ùõQ×\\	A	U!AÌ–\"Ssñ±„4B{E¨Øätt~Cb3!¹@¢–®‰!&%é \0y^PtÄ …Âp¬\"'h¼òÄ–wÕùísp€¥…b¢ŒÁD4såÍé€C—ÉZ„!”2–ÆÓô,)ñ#4&úÄ:ˆ‡ö ô°{Ã˜[ˆJ\"ÄpğPœJ-ğæ!¸ˆÂù7P¥µ‚èšDCà|-!ô¯”xËjE æÚ.FènDMü}*aág*EL:ªJ!)\0@ÉP&‘Ş<Å0èÛA²0`(Ó´LÉ)'^	NIä‘’±áÔŒ¦˜òÜ”¤Â1`Ù)aŠ^=ò,9…FÚ\\\nä—ë=ÜÄæAŒ1Æ@Éã\$¦&˜5À‘ÌpÒ½@Lb!€¸©“T50T¨Ü@ä‚v ë=DmÈë4ç%4zFM\$i:L\$ù#”0méîO¢¼ä,ÆÊÃõ+å‰ï–a1O¹FKeÁì—K\ntÙ|æóm«<;Àr\"\\{q'B‹Ñ™„\n[ñZ?¥ÚŠ‡@œÑOEÈ¹\r9ÊAw(5Å3w'ÜF…æ~¥Èe.É´§…Âb¢lim%+F¨›M‚¢TÊ©^ØÕS°ÇOC#˜/íR¯ÄDùK°f!\$¸°]ZƒmkT6ÀNi\rn®ÊºW`ºÃJQÕ«åÈ0@@Ñá!k¸:73ZØEu*9ú©#-Ë¥i­uÌ¨×ë\0EÃM_OtÊ0ŒuâO\r©D…ø)J™:Ä4Êc¶•Uìø”öâQ%ƒí€C\rå\$:!\0ÈW\rÄYê\0:€èCeÆ+‹*áªô<‡Ñ)À7ÆŞg›’«Í0Æ Åğ¸@?xAp2°gY§áœÕukrã?PØâûeWcø¡áÑş@“ìÙ‰@¥è,Üa0%¡ÍQs@¼ƒuC›À·»€ÒY,‹ƒÒ/ßĞ\\J‰ËHSA¤¼Wm‡±+2Ä•,†˜ÀZİÆ3p<£Âø‡Ã˜uJÈ:;Ræ]/â‘paÌÙÅ2ûu.&?6ë}è>£‰iH•d\reBÉHÔcŸVeâL–ª)ÀpbeğáQ¨™O¯u*ÑU<Ê`êl®Wú½Y½„Ğyob¼G#C'%ŸH¼Zß¡ìõ›®âè€·tõ¥Ù\n[M/_êõ`¥hWPÄD&]*NZ.{eS†qgÈÎ™nÎ°Şìq8ƒÒ\\³vA¡É ˆgFµî³OnÜkÂUŸ0÷@ø\nœ,XL–Îq)óAhLC‡ÁæÈÙú+†ŒW£İ´=æPË…¯AA˜4ÏIÍíµu,:o#€š­Ïî÷Óê¢)\r«µÌÙS`ºmÓô´( \rXŒ›hœQ£77İôêš—ÅBØj¯óÅ[‡Hu%oS¤×“À‡Ğû2¶°áT¥e¢hw¦%ÖÚ€ÂıŒæëß4Ô7<Ÿ³û´TŸ¸¢!:ÇO2s™~(Ğµñìê\\i¼\rGVªÖA2-–¢Ÿ:Ì	åŞf Ó™'®g\$ù§‚ÊNxHói…tÒõÄ¤¯­÷@­zÎ\"Q5³Ö¥ ìÍ7ç«i¨ë~~ÂV7@œ;~øà?vÓrqÏ‹²>‘ewJç¾ßën–Ó	ëx,[©ùŒÙî‰ƒ°N²-]´:‰œx0n€qÔC·‚~PIQé¯ÀÄû*¿ÏêFM*ŞÍæ\$‘`ƒZÏ´}ı<·A\0!nzß‚#˜,æşÃøûĞ…dÇS¡p«¨a`5™	»ŠT__Ä¾ehæ’ÔùGN¥¤rö_ç`Nª­øÇz¤ú+cnÛ@ø øÉ øi.]ËòÓŠĞB£®ÇÀBCíB(šzÏT<CÈÔçÚÇ ËP4ùlêsÂÆëDúÃú~\0ØPPÇŞ­ÊZÁíN‡ B+K°À†&ÀØpXXPs\$ŠD\$F±Æ\".uH•0BBäX€îS\nM\nÆL-ï¬¥-Hõ£û0¾ê]D*)ĞXô0Î°/˜~nª*­UIw¯0È8I\ndBÀè°‚õŠyK!@Ú•‚˜0â\"‡CŞÊŸ @÷\0ê÷G=©N¨,bÍi:—- ŞL\roêRYğp.ÎşÈğÕìrs¥Øpö€–¥V­¨}®ø ï±ÏZÓ\$:/±LßfüwC1uƒjŠ¬®Sc~&Äfz`ÆŠ Á*-\0ª¨É¨éNÂ¦ÚÂé¬Æ.L´JÂú1’¬\rNáÅÊò,FÉ.,ÑmÅ1Q¢…#ûÍ?ÇiêÇñ|B±OLrÔ#½‚ØÇq†/¯\rQ\n–É'Ñ\n'¢l“ÎŒû*ºñ#0íR‡²'2 Ä]À×!’\$zñÆgbûÎ¨t2Ræ†?e\0vÑÎê\"´´bö‚Ÿd„k\\*Ÿ	¯z·ˆ0·€@)\$F\$è ãâ&„uª`\"2ÀÜIŞ8NğsIv¹‹œº¤‘ë./\0ÏN]K-D€é„#j˜İ&Àf+ ÊR”²˜¬Í8¥‘¨¥Ò¦Âpar|Cò­+\0àg²h\"-ú.Òş*“,K¡\n¯'`@´æÆ“2¦GfĞ:Ê÷¬îp<)îìOXIÔ ¡3d¿-âæwÎÏ†J-oğ6ŠAæÌ!ƒ÷ ¦:Ft˜gm5ïOHÅ5ï^œ Şs	i&yI* â>@Ò S¢çÏzq!D€(’¶¨ê(m ËàP\rÂ¹9âÄ/Ç=†ÀÿbÀ	ÀQ<ÂĞ­³àvÓÅ.Ã8ÉóÌû\"ú1àM<ÇÀ-óò @\\K¶Dç \r„\0O1>¢Ü/´'EJàˆp‚0Ukf\r­r)ä®ÔŸ… öïr¯vçq4st:	ål£1XşÒÊ’Oà@ïäB¬ò(ÿŠ0#UIŞ='j­ Âa ÌË˜	’ìH#;H+]H„\næi(GH2¤Á”–¹”œ† k`_@ kKCö:¦:Ì_#®h‚*€ÍADìCã:-zkÓ&à>¢#C46w\"YCÏz¡Ï4´9O …3X-bìp&VÔÚÖåú(RgÉ\r2‚\n ïjÄ’ ûğˆ+@È¹”>üb–Ís¶Î52„5*\nMn	ãS…ŸUh³é '%Ñ+…„Ùl‡KOSˆ=\$\rUP‹\nêÖ~mWõaW…ı£õRòADèÁõ}SŒÁR¦¿B‡Løö®Ú‘¸ñ¼‡L6ñÍò\r¾Äu¬ò±âãlqZÏ>CµJ)mñ…ğ¼`Â1 Pà¶ Z@º€¶½€VãT€L.]M0‹ˆŒD`ğÄ\ndßËöÆ5®û’ÔÂu·Ì“[â\\1×\\mÃÕÌã1äÒ!]cz/±ğÓ\r%^Ué^Õñ_Uù_Ö\0006ö`‡¡dêşåúqVlCc]„Oaµ\\å4¦0–†€HZAïjœI\npƒ¢œP@w‰= È%KZ)àŠ%®î·C·Ê‡TV¼&qb\"€\$uFØètG6¦\rÊl€İE“Òt\nĞtŠz+„gR f±E¥#o6öR“ö¼°¤_gzs3¸)õlÇ\0ûBIÈ*ÃĞ!DÂ‚ Û4Bö0øV…<@â˜gww”>í•EDòº¶İq—Zw•Ç0ÄÈ\"·h°±i(‚ûè‰a&™a^8Ó(9C˜Ùä…sDÀ)Ğ‡C±)kè5ª·Šği‚l#<#LîÖÖsw2@@İ:ãÎÃvœ4_G ÜÏ‚íbkb­°÷ÍccmÜ7ÍíÊòí l\0_{·6xï8‡\"?|î|q€Ó—ë€mõd£o€ÜT%•(àT2Ne2‹N²XSJi6ƒy®z;Ê#V‹€û÷^\r\0Q 6,Ëÿ-Úoé€Oh+˜¸6›ÿ‚sYp`í}+}N·Û‡—ácIÃ‡—ìòÍbèwxèîÎßoFêK‡Tä¶’5U½>&â‡Hmv Q‹s\nÂĞu8P.’J=OrQU\0l¥‰V>oØÈåp²åh‚Bú­O¸µ\nÕ‹VKGX±Xğ­DyxW*æÇ¥ ä?–ò-ë„\r¤}2ù&X@›^bĞé\"–ÖP\0ÈƒËlàåm\$€—ÁD³@¦©l=Õ{ivüğ}F§@ŒQB.ğ}l·\0We\$6Ë‹Ï³—ê¯l¥4°Ñ\\-±aL¹MÈˆæIÈ1“C=;çğƒX<Vƒ)EP9dXOâ\$ipEŒY›up'H_@ÆÀu'\"X êö\0ÄUy!ö¶«)è>¶£2àyÌ-Š÷¹J\röÑ›vÆ'×¥•¨[•ãÓPYì¦\0ón-onw+ˆÖ_âœè¹ÔÆYÆşm+=2İ¤ \\\rQ\"\r\0©zš\noÚBà9È@úS¥zZša°yó–Ñi—÷	36ûoùØ]šƒo—˜£C‹‹aº\\]Ğ\rø°´¿oÀø aLYöJMQ¦e\",ÃÇll:> ÜzÚP¯b~…:Ğß0ÚõÓšÖ²‚Èc­¬’%®¹¯HÅĞa8Y»%ÓŠ±YbG)÷¬N„ìûdìXYó „€AY™²OgDQ#D–ÕuE„(\0ÉoO¡–ÓZ©ÚÀ?ºGœºLièÇ–™#–ÚŠ@™—™†¯:Q·6úîÈƒ6­º–«zÀ5V/\0:¿¤®)¹´ä>âÌ= ÖqK˜\n€Ò0k†¸¸D-ç¬°Úw§¹Ì°™+F?æ×¤‚â\rpE®»‘¦+°õ¹q%2•wVK‘9íŸ|`ª)² ‰£9IYM•x–™»¢Yc³Ò†pwFú0ú5n¨xls¨ûrš·¶7W\nÊ@f•§™k»¢ÓªÀAÃTÅÀ<\$+œCL[úÇ\r›¹@Aµ/éœÍNŠ3y‡G¨Ü=¨BûÅDLN‰	7bÌ;ÄP6ùA71#ÈÓ{*?’[¬¢%¬Ê²øDhµÇbrÆúÊsƒù›~ÿĞ—¼ÀÔ|·ÈüºÓ{}G\n2ÿî˜“j­ÎÊ‹3O5#£5zQh`R¼åjÆåî|ó5E“¤<ÿ¸‹2B»¿‘M\\.šşêztl¶y›jE´/Vå;…|â¨È½p@¦>##ÇqÒp_%çÔŒ[	šC‘B¬˜×§r ğâô²Ã˜D¶º›À™TÚ÷œqÌã¾µz‡N‹#5ÚR:ØˆR§e`½„Vc†5~c]ËÈ{ŒşŒ¿Ñ‘ö¨gJLÀ¨Ç·/²ë.ãíLv!=ÍİîÇ{q]ŞtÙ6ŒÜ½çÜ„}ßQàÜØÜÉv!‚\"\0‚#¤‡)×t\rÉ,xÇÄ?Ôé®}Æ…=ÊıÎG–EÜ›qß¾5Ş9İª-ş%äóßn0\0|d‡­â]ÿå”³dİîLŞWà8(&¨\r€à*ÆÑXıd `†Ö¦:W¢ĞzVpw•×ÀèëlÕœ‹o ëçõcéVìl¥\"#éæD-;º:Zˆß,ëğÑë~„ÕÈˆ éìèÕá€Oíiƒîhß\rÌ±R©2™ƒƒJvGÀZÙëˆƒ­tñ/êÎò—vƒÙh.‹YBºqœª)h*©Î5¨Ækú?µ±ˆØá1¾ÃM¹\\=aŒEc¶!c÷ğİ6FÓq½ñT°Ê{ÚEjõ1Ÿï¾„uUqàR-4£9\0ñ°¯Õhö’—Xu¡íõ·»Orx*à†±‚\" ” ° €âFbk:x@÷»®\0°\$ëœ`üm)øw¢ Sµ×èµşš )ÿÖ	ŸÚŞşA 9°\ny\0FB\"”ô…øY	h @Ôë€\0Àc,è•æ±4‰åGJ|²í”^ÇøÔC-sşßúÿóJ#±€ 0¿ßüX—-¿Nè÷@\0OˆC¢d@à):ä‚– &–„g\0s-p¤`L@*@v¡¿€Jİ\0#?PuÃ©Äò‰³Š=…®Ã0 ƒD-Xà&°_vÒÍFÀ9S&zĞ\\ÄƒÄh”ÆÉ1à'ãM~(8'xØ‚¡„ÛƒDÀ°ğÃŠ\\`ì‰ğ]t„y¢X¯i‘^¤X‹æ£†& +I57ì%	/xHˆ`b„àA„H…Õ@Äa¤Cà4ŸĞ(<\n`TrH	ÀX^¥),‘ƒp[Çœ=h,Qî(	¨Ë…¬90—	k-kÇG£²–	ANx\0Z:ğ•ì°	`˜DFVHÂÆ\0Ë„\0!œ2 É`°Ì-ˆTœ4‚jÀµıĞí4¡Ã!’RÀ¹´0k\n›Ó›ì×ô¼ÄlÿŒ@€óg pİ@^’ÿ(üè~D ˆ‘t`õà+xŒ@Å\"0¢ui§é\nh6%ø\rÉ€ Ğ†b¦ˆ6#%â;¨šn\$Áôìë×ø‚¨3€9BS\nKĞFÕÒiB\"GJ!Q	xIÂ:ğŠ€aa2¯2òÂ´Dp/ p\"F‚#˜%â€-‰.†ä”Ö!‰ÅªMR¼–0-ä+}D\0”0'8 „ïZˆ‘’Š&n3VP/‹e ©ˆ\n\$Ö	C€ZiÂøJ+åÑ€“9Ù»H²D}ïÕ‰L^'[¢ø‚’.ëø¡×H¾ÄÜšA¨GKêƒôÉ3]C€Ñ’‹„\\…D-­åĞ	’ZaN\0ÂÄ	\ne{Î\0ê5`‚?|\n1ZÖÄP]§QşÏTƒ#ıJà“à2Â°ii\\UTV°®B<íghú‹ÇœĞ-¹xıÈ/Aiâ‰ú3Æ¬eõc3}jM`ÄØ-0©&ˆù@¥’\0²¶®ÌÉfMwi¿b&O•\0ài7©ç^'ä5=¬lúĞDƒ€“9€xàHGğ>6ì:À|Bí¤ Åÿ…Ù·h\\\nÑ”æc÷…ö<i‰0ó†ÌÒ°ØÃ˜ UY+Q hïá¢P9R§#É¼\r²@	h„Üæ.£ÛÌbAÑvÂì÷Ó—¼~‘¡»J@Ş€É\0˜›…†”›0‚ß¥¸ /Mx\$ Øï· 0cH)ƒ£ \$Ø	EYÚeåàÀ\\+èPÜâ¡sd¸³öÁ3V3ŒÚ©#:ÿÛE½,huÄFİ´È™®&¢€‰¼1`j63î4©ÃÖ•\0\\\"«TjÀtù0˜ÆÂÃiA‘†t”²6X]÷Ò‹RGA®o‹¤Gİxğ²…;ËLL£­\n*·Å	ƒª^{8~Êµµ:ı4aşP°áš.ãDZÇ^2HW\0d¦%KmY…@sù†vÉàò	Y)æK–;Et\0:šÁ-&\nõ¹.€7\$EíîqªŒšÀ£Y56¸º,æs3oåâÅ”*œ¡Ô%CjƒN!\"Â9L¸!·ÛVz·J…¾_úEDeÖ°\\Y¤‰a£¸y N¢p”ÁäŸbBKW¨æbóBzN%\r’\n˜Rú ]¡è\n™€Ê·2ñK\\=½nÆİŞå¼­Éú’˜!æS×4Ô.?°\$\\,îãå½9\0\0002¹^PrÎÔW²ò@,Æ\n”ØŠE0%©zks]P @æ9˜ÄDcòÀØ“}™TKBû3@¨¦I‡Iš_@éB« '©¹“ƒ}©<Ğ®Çeİ]ÌÓ@t4†ø\$ìMò%aT‰¼ÑÈ¨¡£)aq¬›@Ê`!0rĞ	JêYRØ\r%¼¸‚iÀi¬Éj¸\rû-ğ•lå!@e8­;0p„JÁx”ïDü3 :?&¶5À@bã’?ÉêS1„û±¹ĞÔiÁJÍ^\nkuˆšâc*á]©”€NÀ:€À\0AüäÎRúCk1	ôÄ×#«ÃæÔ˜4¬¶PÃêp@˜Ç>ñöÈQ!ìÎ‘S#“úl+ƒl‹`ˆ±›Ìğ RV3_•Œ2•5‡)5!8i(»'RĞ,Œt” Q ¬•cK|/³‡0€Èõ˜m	èz,(¨0\0å&óº¡\n^èµ°2PnI '¢FÆ9ŠA5ï¢¡òŸ`Š©ÍD°\$ì9:©Ê_–Ï7æ¤@BeÌzÈÌ„dE;Ê¤fÅ—‰YÌvèö²öe¡}”Ú¥ÆO5êL^QPiB‚ (%ùS§ŒšRbÄ‘„G\$‰\"I³|wl‘0ş˜†D(-ò™‹äM—©#Î6‘’›,çRñ\$~¤¶e(e´÷ZuI>ív³xÕ&g—êN<J€àn‚ğŒdœA{î•t@*€Úİ@jĞ\"€!\n¡¤Gì)UÌìPôdUeCuE”ïN		À¼HëÂkéBÒ5‘N©”cB‚µij½Bï\$ Ó¼Á¢Ø(|oSHz#“G.`ï¸!š®\n—ql)º-cÜ0L\\©‘)ùMéI)€t\r ¥bUE &N\rAÁıR\n„BÖ¤¾ÑL/²áNRÜ á¿)àÊk{³ÂÄô\"ñÃú2ôtPt£g¯H“N5Ó”¾,µEŞx³lºr)€ttåAÓ7èÓC*5\$\"&t¾¦h€4W *Š¶éÁôQª¦®u «©¨n~‡YŠRKÛ•ê6æ=\$…\"@ªG¥'zQXWª¿¤RaÍ§¾Xq&‹I@VŸÎÏ= DtHeD'7ªœT%U[\\“ß”&‡—TKÌœã8N|6Ùbëöm»ÔÎ¨m#krR+-8ŠÃm¬1JYÚêŠÉV5cók™‘Ù@¥hFBu²KDdêçì”à¦ş•@%T3+%)j\nM(¾f{5¸XBÂg«àİ¡õÔ¾<XT\\…šğ\\Ñ˜V¼¸¥-Ulk‚\0§îg¿ˆWu]IzÌ8=ÔoòÑÜ1f«dñlAVá¶ò=uŠ>‡’XóÃßboÚâWŒÉ£Û&ò_ÓOÏ!\n*u­Px›ı\"! Ö¶¹BV0àtBrs™gGAØÁn½|ko\\Š1J®¾Ézè[ä×`ˆø@Ò\$?ÌE‰¼ñ)ÔdnÃ¯º(ƒnèñÌ&9¬‰€ãKbPÕ5Š™ó8›˜xêü§júJ¬?Év­ l[–Vê/dvêİ{©Òå°z`lK\"¾Myz’‚ß`\nŒ…H*VÉlªÙ¢s	.±¹9i`*1Øì~†­µqì€Ö€½JÈ¯*,cìi7IìFÉ±²}”B¥e:2=’ÊÖ^®=–J±eÀ¬XÌ~u\"å™`ƒØşFiIe~@@ÕØÇ:ıPu§‘Mc©`Çê¥0–P³]Ÿì»	´ÕÑ7ixí!YRÚ°]Ó#Xz4“lWºñJâ~5åŸ›U#â¿õ\0c“8bZ¹Ø3wf,Ùäö%|ù¬\0ÛÙ³ÒÉM!„Òï€ñ†n™%‚‹Â\$;à&¤QÈŒ.¸	DrR'D{\0œ€alG\$;+ÌKá\\UŠÕÂ¨§0\rÕÀÀt€ß-ïjá\nØ¸sÖı„È[ûz-Ykï:g!F˜¥3‰ä’ã¼±}º˜)‹y¾á#cZÅ™]f—aZ:<JÉD´Ô³lêìZ4IT.mÑn˜[ªüGMªÎDBRqÄ¢”\$¡8!ƒuÄ£FÍ¦TS©vDí9‚46°šI(\",ä¥ıÍR Fé7QĞ+¬èÓÄµô~r½N+Ğè™‚uÓ‚¸–m2\$',#[ÜØ*Ój!Œ\r§®MvÇb„]ó	S]ŒzèTçEf•YÖd¢İjíF×QŒ.m#7B´!R £\n¡;Ó˜O~:ö›”Ş	 BZë‹³^UoçuúR±P2šø’Í*Ác«e¨E¸MS	ÿÜ\\ ò´Zâ½u¾%>7IRúT´Â\n˜Æt³>m¤&Àn`F&\"‚°Ø=OOÂ¨%\r‚ö¦œ¯Mt\$Ò°@HM§™\$Cû{»í\$2NèJà{”YáìKî(‘’\0›óNo÷çÒJ&xD˜°.—ñ¿@Jñ05_ô(‰0\0MXÖVÈDˆ\0m`@Øí|Œéãd¸ÅC}2Ã6!àQ 0\r'ÌÏ	n<\nc\n_sĞ\0ÎÀ)àq U|Lf5iP´®wÀ•%ö6Şø'À¾ş°‡€&÷vh•\\«IL´©a¾T»(ĞÍ¡+¤Êİv»FôĞ¦+^Šç[ØdÂ¶*ÈĞ‘0·›¬2¡˜L©@[aê2\rµ]ñPˆìÍÙA„TWN»@an«ó~!°2 Ö®=à+•_lA\$2ÿI2A	–	ÍJ\"	VÊòÁ\"-	gEWRâØÇYw%	<w@ÛNÒİÆÓ¤-»YÛ®PVµ\\\"N m\nã\n\r‹¡–È)àI)ˆÀp>ø÷ĞÁa+Ãy\0æŞa¹7¤-uéK\$Ï^èü%À-ílYB/W³m†jã1ËÕûzr@ä*´§ÄmÉy\nSÂ>¦ô2²‰O—,³×gK¶:ş–vmÀó™Ú@f½xM…WYä\n;ÈÉøó\r¤ĞW©ÜoÏØLEÖ¨‘gÓlLP>C…Å§t)°`èß°ı¦G¸y×©DH†@†{@€„–N;bÉØæÍ'aÀ÷j Ó°­@ª@2‰|,p™óƒö,ü˜³åî\$m{ªŒs“ˆ¹0‹(¿ÿİÔDwv1ĞYAÈPãÿ”SÄ¾ÑÁ½œmò8Ï«Vã;|^9‚[—›'/pµ@Ø2rƒåÄÚâ_€'¾+s”è¨‡G5ÚÔâ|,Ó{\\i(ŒŸä5ÅyÊn2š¼¢–ıYGJX¬ä\n¦yÆå÷\"G¹ÌSóÇÜ¥åû1™¿úRr‘˜fùä`§ƒr¢Âœ§øc\\…’¹¸òD‰›s&ÃLds¬ıU\\*ıòX«:(´„3˜Ï‹•bínDü-I¢˜ã˜Æ¯kÎ±“ dŠ>Ífï¼+l†BWTaÂÄªï4Ô„ÛZ|\$Jd†[ˆAd*¢)©aQZÙ¼m®p·›ğÉ1vz\nÁypÛı‡JaQ†|È´kcä®%ù»7µïG ~ˆtEBØ1S?«˜\n€¾Æ;)¸d26ªlx«™àGšgp…^¶GÔÎÈ„L“=îÍĞCäË6>!òà4DVé]Ò\";‚gz()4ˆ!¢ÜåÒ’ã`\\Ê¦3V‰à¡/x±È´“X\0’°\"ğ\n@E…ø\0¡\"+L@-äVŸ6‘´‘m\nQŞôo	Dì/ÖRü¤ÖØ«›Æ4y SìA Ù¶Ïƒ«q	¸[A£¾ÖW6h‘â‰wBºÀò´2½\r”¢\"Kú&toÀÎÂïÓQÕ	’×F°>gµë _R„òÇê`'!\nd'ÌáÔ:’Ñ¬oò-Lœ/²S!Ã[4i¢¦…G	!îšªÙŸ0-èô­º=¿^¢K²\"ríèŞyÚo¤ë—Ë¨æ¸Èdd!TÎ“´\nqÄkGÄ^?FµE¦Ã©iº®icXXÛ¬Qö÷TƒÖ¯NMuŸ=AØ[ZFºÑşµtï­|îkfBºÅHûÄ-\"'€¥¬’’.ˆ	Æ{£ñÌ\0£6Â&…èKòÏÜ0ê 'u\rn\\\"â!á‘¹›zdÉÃ çñÌ±@-wÂ¨Ğ1fp*ØëtËf.RÇe°š¡›<ptÊ¡­vÁIF‹üt¶gŠ(ëÓÎ;-³¶ÉLˆ@\"ìdº\$\näÀÅfjÏÊKÖ\rÅC²4ê¨R¢˜Ú´b:¦3ÛKA Òââ	¸öş–%è¢€6Xg@Ä/“!	(âèr&İC%!)÷A\$ŠZI[LìßfÄbÙ£±Cêm·Ÿ¨1WÛ)›5M²¢òÚà`\0½L±e‚Ë(!#U\nzŞ_¶×ª’Y!Ş\rlß(¢úS-C{hJÀM´º>õbIáêb»çŞCÒ¸â¤Aû¢+Ş+Bö -¶ãE¯Ÿ\"´qZîˆY‰	7­\0àÄı;Atã?áéËÑåÎNĞ¨¬LÀu=Ë­Çv4š:¤§«Ç^ğ\0ÀP0O#U2fİx@Œ@şî÷?d‹hE5<½9–xcÅüÍé¡õ\rï¶Ëø¦Ô&K!	İqBâÕƒê(r¼˜|u;ê¦¢%¾Vİ«ÍüKYŞ/Â§£‘à}^£ÄÜT JóI‘°ËE&FqEƒæQ¦’‰<÷¿NF÷7ºƒ’ªo\$\n%…ùƒf*½ï	EN½5»­üí6š´»ÖæŠs×ÂáÔq|`2Æ›ŒÍzgÀ-ğ¨˜&MàĞÀçVx¯qL×¼U_i×¤â!8™¸Mïp5a«üC8È´:x÷)\$+NÁOÚxTæmŸlŸh u\nŒù8´¢äqÏJ\\y*Çøû´N\$qıvÚéW„ı¦)Œkm&ò=ÒÃüì¥\$;L7€°‚/÷’‚‡5;n’÷ş!ğÚd]\\‰,¥_î]ê¶œ°V:ñG{óìò±Nò©ÕS#<\\X±Eûñ7Z¿µôÀsú|ÓôŒõ85……÷E\0000Õ€\n4QÄÄcì(å-wÛW5Êÿ?bíóh¾ëœåŸŠ` Î<å5½İîä¬Ûº?> Xr}Ä°´eù\\ç¤¶Øq®î{Zfú~BÔÏV0ğÃŒ\\1áÊ>ë!¶\0d²Ata“¢UØ\0Zu_á\\¶¿)påĞõƒ–Áw¼¡rºB»Â.¬)a¸dç¨ÙzkÌàZøê½éo@yî±L./·86È1‹L¹ıÑR08£ˆÈ\n\nMz•†~àP®Ñ)õ<Œáô'\nİãU°åÑ	ó*@> _	ÅE!©@¡_¸t=ßÕ(@ğ‚²m×˜û:ÒWúStK°˜“Ú½@QÑ^‹ôdx«1èî\rªÊ½šÃŠœÔ[%™Sf©Ñırë†³Û×Ñş²Ï–€i7R¿Â/ö YÙÒìf ZÕÙµ#­‰/Æ¡Çz¯ÍNSÍ.zå)åàNw;–N‰sQX]3Ã÷jœõæà.oØ&É÷‹Ô§Qõ4®Šè¦¹Ê÷'\$-ÎxûÈÎk@¹ëU¤zÛ›ípXsgE¥É Şhı¸íWt‡mÛÄƒ»’hæÒ}Ì¦5ãÚì@%³ÜÓ±ªÇƒ¥PÉ¼­uç,r½dnZ[—gµÙİëÛ¯İ@3÷ÁMj¨¿:+t&Œg¨½ğ{°nì¼\rdãâ²ÍáNİâê°/+ó£[öYu_ ªõ¢Õ];õF| „ùÏÎ—8QRì§‡Æz'Nôg_½ÁÆC¢G!­EGí![«§\r|3šÃ6P)!Ñ;4r½’íÌ›ÀÖÍœŠ÷@®ÎSK››¦0wº§€©ˆÛ®™~ªËa¢R­»¡õ9÷_”}yMkƒ±uRØñë8ğ<Ñ^8şk0&RGîî»´	'¬	ëµ3\0ø0Ùc_SÙÒC¬5™ˆn¿?z\0\$\0yôœ'•_ ºc®Ê}lˆDèÕÿúÌEy7_¥=,,íOö.‘şÃ¬•éC—Œ„.ÏÒ¦<İ¦ğ‡,\$÷ÓOx­Ë`×\$½,yÍ·\r¸îiÙ›Fh·ÓL©%ä—&õÿ•ïÁŞgöI¤¾ÍnîB]Ó‘q¨»G5hÿhoÎ¼>®|€%ÿ<B–ËEY²éÿ‘±ÌI¬YW£˜n¢½<\\ÏLD_ÑşØ·Ï=»!‰™)¾áAUì¶U¯sBwİ&ë7g†\0Şè\nH’\\:Šù‚TÁ‘àGÁqõ¼½GïI!c;Î¾½\npŞ²'ï~E7ÜvˆdWÀa\\ÀĞ®I¯Ø†”	> (•ösâî(ÀÖ@™[b„&8‚~ùYÍëB\0€¸À.¯¬}³ïoûwã»>`ºÅ‘ü\0Â*ù?À÷èï‹Éh-o=yú‚¶É¶Ğ²lF[ñác±`ÆQ÷ß¦½€_»Zwš£6w*¨Ô}Ëõ?³‘İ>¦]­53š.Ou„ƒÏó&ôÅI½ªÅğˆUh®KÊorBs0†;œº\nØÕ+ƒ‚üZ¦Ê*{í[˜¹?Û|÷·ƒsí¥Ìùàød´*ª¥M-Ş-W§ıãø/»~x’rk—\0Ïù¤ê7?n­Å)dµÁ˜2^”l²\\ ­«şì§–KØ3!†\0¬5yÒÕ°mˆ!ºMµWWK;«àq|-`\0z \"à€Eıè«¬¬Dÿã?ùõ‚	5X\"éo)ÿÖ«qÀˆ‹TDÿá8ƒ6Y‚¦î1Â`ê¢ª2Y*ôˆñZZ¡U¼\\@qOæÀ§pÁ‚pŠ,'.²oãÂÓp€i/\0¼ô£ó!”>‰¸!w2ÂÛóç€¬j¸4/~)\\EÜ' BÒLä¿šß3|ªP•êóÛ¯€ÜèÓúi8?ª¥»kè/ëúïï¿Ê/‰Úâñ?Ò/+üH®¯ ÿkıº§©°\\,1PÛ­¦¡t¡~À.˜kĞ	@Æñd Û¼^I8¤=<sÇÇf‰,ï™‚9l°Rë;“À£Á9^A¤€?|KK¦è2‡ú:Y(p²•²Šò0ºç[ Ï2ÃVï5-÷úË£\r0é{¨t=¼^@|ÁÕ>ùHôŒ©‚HSÃ‰v²ìÓ¤\rtô	Rì”,ìğNá­H±êÉg\nP«ºua¤˜’ÂÂ…Ì,°gºÁ‚c¤Š ?„aˆ­`×\næìÑÛCP:Ö×“´?²<ğ*\0`®»RXÊqƒ´¨—mŞˆ°Tû,\$‡73€§û™,Ò)Ì¥t 7	|âà)\0‚rà>4Œ…ÛY¯Ø¤¨ˆO=È\nÃ.¢¾AØŞ®àÕ=Î!< AÈ\ntàÚ°]›”…B\nû°+\nŸÁa„!`÷€ZªOª=ĞùL\$0Ššãë‡ >¾N)ğWÁç˜)ãÚ¹dƒ!¢”€Üíz‚¯º&n|³ë½.èç9Ì‡ÏÂ>áŒ¦CÀncÂq¬¼Bˆúœ\$…£(°ª3A\n;RˆB3€¹°¶àœ‡À.uãro}\0@Ü³Èğt¿:n»¸o}9}áWåV•ˆõ`mĞ¬.b~»…7Ÿ.ç€Djµš))øï¿&™»<j¹í‹Ÿ%÷9öóØ„3òW+†nĞ«/¾Î e'4,\rP%ƒ¤â!ºR]úÿõ9Ïì*0šç”+Uï ñÍ†×@ûğ™f\"ğmpµ•9pt\rÑBàUœ+0º\$É\nï'Ì’÷áWçÎ¶“\$0)æ?€éÃ=Ã¾b(ÛĞÅ´ÒR0Î;`Q`Ğëƒşü5Ìú#£e™Ü2cÂ3\rØKZ3tµ´9PP:té“|îƒ³ˆ}|1®ª³”öÑæÃ:'ä6ï`X<iïCô}£Ôì·€\r8§äæ~P€p©P~pÖï°²~™ƒ-v½\r€„,Pn(ÙÆP	âÁ¢îŸ\$×qngãÄ<JÚï'‡*AËÊô‰¢5ÒºPçB:»\0Û–.®àİ³æ¯\0Hâ8*¢å—ÖéÈá\"“³íKÌùÃ¨ÎC\r%~3æÓÛT9Ã(3ÃD ı'üCXí!0şÑÛgªØ'¨Ñ\"\\Ÿ!íb=Rí+v‚Í·DvŒM\n¤şv¸¬]²ŠvÛùÀ¾ÄNXX3±0\$¼“eQ	\0`ÈÃÄ0U\nÜŒPˆ_é<qDCéR±Cn—”Nğ·¢îz îè‰vÁ å…×qG“ËK¯¡ö§ÏúÏ…hÙ\\2°)ªÊ+úP\0ÛÄâİÑÛi5¶é3ñŒM˜£ñ,”OĞ\0\0’p€\"€°¾@­±YºP¶±\\‚Ø7‚\"ÁhÙ¾]Ü3Ëk'¸HŠ±J•T¥e®çËtG?EFĞ”N9Ä…‘}®‚Ãã³Pô£ëc8ĞÇÒ=Œ2B´£YĞìE•bzm\n–_Úå™ÃÈĞÔ<îhÃÒEQ­ß8‘0®·Ğ¯Y°úEÚãT`§‘ó‹¼*R•Ø¤ÄU16•÷ü< ÕÄ¶ZÄy5zA!¯§Æ*Ï@§Äù\0ñ ÃLª10Å&ÆÑèPÔ‚BáKÑx—PtÁ3>¹i²…ÁØhÍÊx3Z+Œ6D!Fz²Û¶&ƒäS¸Š+ÙD­Bó­Š\"<Ñq¤ñ§öH³`€©Xán9´k1±„Íğ®ñ:¸îÚiÑ,FÒÙ0'-6¶“k¡DÆ¨¡Kbâ—#¨>*n€î²Ú\0Êm>ê´8«Q¬§lÏªÆ¢ÄøsÑ^\0N¨\n\0\"\0‚£ '€ŒÜr¯ãf‰ ±0\0®\0òŞ@!¤¡œ2iÏK53| j\"TlÀ4Ş\$;ëjM|«q»ò%:Z¶,|(%ğ>3²j™r?Áj€Û@i ß™~‘™ŒäıšaøÔcSÆ¬ø:¡ ÂP#ÕiÅR1ƒSÀ¬BÁ\"‚ZÉLQî”˜º€ŠĞUpş\"²RläwÌØG€_¾!æ/l@O\$ı3K³0ÊË\nV²FÏ8	Q‡;,{E1DRRø!®#«2|jGĞP#Ñ‚Â‚ükˆæ%üa\"¨b\"„ï…f)È?ªé;Àê‹?&9Cê¶;'æ)˜ád¡¯šp1(6¢Lb€ìë»Â<•“øP“ÆÁBN%‰?¤ñŠÂP<ˆaÚƒ;\"0Ó\0ú¿°İ0¿‡nVI>Ã'´sÓÚ\r0«Ó0DcÈ¶D‹¦#\0¯\0ß¸¢aâ†Å¢”ªQ“J’<\$jÚ7mTõ @„şúj®D˜<ı4Š¿È¤şøÊ±7ìhx‘~–hÄÒ/\nşZW’6°0y Ò<HôDxO)Sİ8 €34R—Hà´¶ID%4†\$\0şÉ,&k²RI!9²:%0h‰ĞjRÔ•`ÑIZ¿y…#®î\$“I0<ªFAHå1ÆÑL”EÉ\\²†ÅEIR¨œ—ÒV\0Ú„`.’ICÜ}4–NÔ'@Rx?§ÃÉ£%Ôšq35ŒG4„á.!Ğ\n¶èš¥ˆ1Œ:d”²AÅTÈÒz€]\$8x/Æ`…š\"™¹ÕK«\"|•ò7ÇØoôD”\rš\"²îò¥©&aHQõƒ•(Dƒd”(%|’±I\$sò­ƒÊï4˜îjÄuA%\0¢‹%ƒ `ÉI²+ùQAª,Òì˜„°*ØŠÄşuB²iI¨IH.’“É&(ÉòTƒ;\$°¾ò]°	)ôr	É0,“r€‰ƒ(d¨²p¯ŞŠ(§2s³*Õ3^ŒF;!§òÉ¡ LœÅGø¦©-*ZÒ¤¬0U-\0w%5ÇæhcoGóŠ›|u±à”FzÈy4¶°¨«qê/û)+WH€¡@	DŒ’±¿pd)%WË9HyÌÊ¸¢d‘ó”Å ÌBéÈ+Ê„Ñ#“ŒRÇ©,3ñ(¨8k+ëHÆÜ t\"Ç!V\r»iÁL&\rAPÊb2,²Õ°ê\0æ­'Ôªòßš¶\ri¡LKn.¨Aòİ#u\$ø rß'Õ,ù@²á!`_@)I#¤z¤N‰&òšàÍ¶HÂ©XÉß|®€†•ğ½øá‹ß¨ó\"É!ËÖ3¢€/\0zèÓ‹Ò'h58{1…ª¸{’òŸ”#d*C0™ÅÆù?äNX	“©˜SÛ&%àÇ:Óë†Ã<úà	!3·&Ş@£¦ÃÇl€9ô AÌ\np„d%‚­ÄÃ`„¶hªw¢Ö‚Ü}ğ„\"”÷ÓrbE‚\\P¤¯®GtÇJÁQŞ²VïÓfÄG	l§\nXæ~É‰ H:\"u¶ÌğhÈÅàÒ‰¢®ÀS\\6£€ŠëğiÆ‡(:?²MIåè\nÓë§ ©´Ó3éPÊ•(¯\"L)0°˜ÉÅxtPoÓˆÖ\n®KÂÂÌˆE¾¸8cëŠ›*ğ¨”Ê€:\rNÂZÇ!˜°œ(ÃŠ3;Hêú„q.¾¹sàRŠ\nY¦Fãğ)@ï–\0001ˆ#Í\$©\\ávg€Ç>•*S‹AÌ¢aLÔ°%s`6ÄğÌÁ(‰+Áª†¯)¹Ê’ƒ\\£º	oƒ3ì×Ó]œ/ºvAÅMM™à·ªj›| 6GÀRDÒaHÉS5”È ˆƒm6\${À:A‚.ÜÖÇŸMpRl›“^(4r\r(Û6Bvs<rz‘ó0:£åfêÌn;rYå«ûlÉÅ®_!Â­ÌÁ0‘xLÁ0ªùt\n@{ËI´®úº‚å«—»tëğ39X´%¯¯â¯Úuì)Œ±	p\"3,í8ÌÌAgÂù\"UêÌñ/ÏS0%yl\$âÅÄÊ5€");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Nd=substr($t,-1);return
str_replace($Nd.$Nd,$Nd,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Ef,$Hc=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($Ef)){foreach($X
as$Ed=>$W){unset($Ef[$x][$Ed]);if(is_array($W)){$Ef[$x][stripslashes($Ed)]=$W;$Ef[]=&$Ef[$x][stripslashes($Ed)];}else$Ef[$x][stripslashes($Ed)]=($Hc?$W:stripslashes($W));}}}}function
bracket_escape($t,$Ma=false){static$qh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Ma?array_flip($qh):$qh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$cb,$Ld="",$Le="",$hb=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($cb?" checked":"").($Le?' onclick="'.h($Le).'"':'').">";return($Ld!=""||$hb?"<label".($hb?" class='$hb'":"").">$J".h($Ld)."</label>":$J);}function
optionlist($Re,$pg=null,$Lh=false){$J="";foreach($Re
as$Ed=>$W){$Se=array($Ed=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Ed).'">';$Se=$W;}foreach($Se
as$x=>$X)$J.='<option'.($Lh||is_string($x)?' value="'.h($x).'"':'').(($Lh||is_string($x)?(string)$x:$X)===$pg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Re,$Y="",$Ke=true){if($Ke)return"<select name='".h($C)."'".(is_string($Ke)?' onchange="'.h($Ke).'"':"").">".optionlist($Re,$Y)."</select>";$J="";foreach($Re
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ia,$Re,$Y="",$rf=""){return($Re?"<select$Ia><option value=''>$rf".optionlist($Re,$Y,true)."</select>":"<input$Ia size='10' value='".h($Y)."' placeholder='$rf'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($hd,$Sd,$Wh=false,$Le=""){echo"<fieldset><legend><a href='#fieldset-$hd' onclick=\"".h($Le)."return !toggle('fieldset-$hd');\">$Sd</a></legend><div id='fieldset-$hd'".($Wh?"":" class='hidden'").">\n";}function
bold($Ua,$hb=""){return($Ua?" class='active $hb'":($hb?" class='$hb'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Ic=true;if($Ic)echo"{";if($x!=""){echo($Ic?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Ic=false;}else{echo"\n}\n";$Ic=true;}}function
ini_bool($rd){$X=ini_get($rd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Sh,$N,$V,$G){$_SESSION["pwds"][$Sh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$gh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$gh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$tb=(is_object($h)?$h:$g);$J=array();$I=$tb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($x);}function
where($Z,$p=array()){global$g,$w;$J=array();foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=escape_key($x);$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$x],q($X)));if($w=="sql"&&preg_match('~char|text~',$p[$x]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$x)$J[]=escape_key($x)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$ab);remove_slashes(array(&$ab));return
where($ab,$p);}function
where_link($s,$e,$Y,$Ne="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Ne:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Fa=convert_field($p[$x]);if($Fa)$J.=", $Fa AS ".idf_escape($x);}return$J;}function
adm_cookie($C,$Y,$Ud=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Ud?time()+$Ud:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Sh,$N,$V,$m=null){global$Vb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Vb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Sh!="server"||$N!=""?urlencode($Sh)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
adm_redirect($A,$ie=null){if($ie!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ie;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_adm_redirect($H,$A,$ie,$Of=true,$uc=true,$Bc=false,$fh=""){global$g,$n,$b;if($uc){$Eg=microtime(true);$Bc=!$g->query($H);$fh=format_time($Eg);}$Cg="";if($H)$Cg=$b->messageQuery($H,$fh);if($Bc){$n=error().$Cg;return
false;}if($Of)adm_redirect($A,$ie.$Cg);return
true;}function
queries($H){global$g;static$If=array();static$Eg;if(!$Eg)$Eg=microtime(true);if($H===null)return
array(implode("\n",$If),format_time($Eg));$If[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$S,$qc='table'){foreach($S
as$Q){if(!queries("$H ".$qc($Q)))return
false;}return
true;}function
queries_adm_redirect($A,$ie,$Of){list($If,$fh)=queries(null);return
query_adm_redirect($If,$A,$ie,$Of,false,!$Of,$fh);}function
format_time($Eg){return
sprintf('%.3f s',max(0,microtime(true)-$Eg));}function
remove_from_uri($ff=""){return
substr(preg_replace("~(?<=[?&])($ff".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Cb){return" ".($E==$Cb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Ib=false){$Fc=$_FILES[$x];if(!$Fc)return
null;foreach($Fc
as$x=>$X)$Fc[$x]=(array)$X;$J='';foreach($Fc["error"]as$x=>$n){if($n)return$n;$C=$Fc["name"][$x];$nh=$Fc["tmp_name"][$x];$vb=file_get_contents($Ib&&preg_match('~\\.gz$~',$C)?"compress.zlib://$nh":$nh);if($Ib){$Eg=substr($vb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Eg,$Uf))$vb=iconv("utf-16","utf-8",$vb);elseif($Eg=="\xEF\xBB\xBF")$vb=substr($vb,3);$J.=$vb."\n\n";}else$J.=$vb;}return$J;}function
upload_error($n){$fe=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?'Unable to upload a file.'.($fe?" ".sprintf('Maximum allowed file size is %sB.',$fe):""):'File does not exist.');}function
repeat_pattern($pf,$y){return
str_repeat("$pf{0,65535}",$y/65535)."$pf{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Lg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Lg.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Ef,$kd=array()){while(list($x,$X)=each($Ef)){if(!in_array($x,$kd)){if(is_array($X)){foreach($X
as$Ed=>$W)$Ef[$x."[$Ed]"]=$W;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Cc=false){$J=table_status($Q,$Cc);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ia,$o,$Y,$kc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ae);$J=($kc!==null?"<label><input type='$U'$Ia value='$kc'".((is_array($Y)?in_array($kc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($ae[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ia value='".($s+1)."'".($cb?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$zh,$b,$w;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Da=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Da[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Da);$r="json";}$Xf=($w=="mssql"&&$o["auto_increment"]);if($Xf&&!$_POST["save"])$r=null;$Sc=(isset($_GET["select"])||$Xf?array("orig"=>'original'):array())+$b->editFunctions($o);$Ia=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($Sc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ia,$Y);else{$Ic=0;foreach($Sc
as$x=>$X){if($x===""||!$X)break;$Ic++;}$Ke=($Ic?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Ic > f.selectedIndex) f.selectedIndex = $Ic;\" onkeyup='keyupChange.call(this);'":"");$Ia.=$Ke;$ad=(in_array($r,$Sc)||isset($Sc[$r]));echo(count($Sc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Sc,$r===null||$ad?$r:"")."</select>":nbsp(reset($Sc))).'<td>';$td=$b->editInput($_GET["edit"],$o,$Ia,$Y);if($td!="")echo$td;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ae);foreach($ae[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$cb=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($cb?' checked':'')."$Ke>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ke>";elseif(($dh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($dh&&$w!="sqlite")$Ia.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ia.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ia>".h($Y).'</textarea>';}elseif($r=="json")echo"<textarea$Ia cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$he=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($zh[$o["type"]]?$zh[$o["type"]]+($o["unsigned"]?0:1):0));if($w=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$he+=7;echo"<input".((!$ad||$r==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($he?" maxlength='$he'":"").(preg_match('~char|binary~',$o["type"])&&$he>20?" size='40'":"")."$Ia>";}}}function
process_input($o){global$b;$t=bracket_escape($o["field"]);$r=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Fc=get_file("fields-$t");if(!is_string($Fc))return
false;return
q($Fc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Ub;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$Ub->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Oc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Oc){echo"<ul>\n";$Oc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Oc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($id,$re=false){global$b;$J=$b->dumpHeaders($id,$re);$df=$_POST["output"];if($df!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($id).".$J".($df!="file"&&!preg_match('~[^0-9a-z]~',$df)?".$df":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$e){return($r?($r=="unixepoch"?"DATETIME($e, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Gc=@tempnam("","");if(!$Gc)return
false;$J=dirname($Gc);unlink($Gc);}}return$J;}function
password_file($i){$Gc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Gc);if($J||!$i)return$J;$Qc=@fopen($Gc,"w");if($Qc){chmod($Gc,0660);$J=rand_string();fwrite($Qc,$J);fclose($Qc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$eh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Ed=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Ed):"")."<td>".select_value($W,$_,$o,$eh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Gf=is_url($X))$_=(($Gf=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($eh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$eh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($hc){$Ga='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$pf="$Ga+(\\.$Ga+)*@($Tb?\\.)+$Tb";return
is_string($hc)&&preg_match("(^$pf(,\\s*$pf)*\$)i",$hc);}function
is_url($P){$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Tb?\\.)+$Tb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($Q,$Z,$zd,$Vc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($zd&&($w=="sql"||count($Vc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Vc).")$H":"SELECT COUNT(*)".($zd?" FROM (SELECT 1$H$Wc) x":$H));}function
slow_query($H){global$b,$T;$m=$b->database();$gh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Jd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Jd,'\');
}, ',1000*$gh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$gh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Lf=rand(1,1e6);return($Lf^$_SESSION["token"]).":$Lf";}function
verify_token(){list($T,$Lf)=explode(":",$_POST["token"]);return($Lf^$_SESSION["token"])==$T;}function
lzw_decompress($Qa){$Pb=256;$Ra=8;$jb=array();$Zf=0;$ag=0;for($s=0;$s<strlen($Qa);$s++){$Zf=($Zf<<8)+ord($Qa[$s]);$ag+=8;if($ag>=$Ra){$ag-=$Ra;$jb[]=$Zf>>$ag;$Zf&=(1<<$ag)-1;$Pb++;if($Pb>>$Ra)$Ra++;}}$Ob=range("\0","\xFF");$J="";foreach($jb
as$s=>$ib){$gc=$Ob[$ib];if(!isset($gc))$gc=$ai.$ai[0];$J.=$gc;if($s)$Ob[]=$ai.$gc[0];$ai=$gc;}return$J;}function
on_help($ob,$xg=0){return" onmouseover='helpMouseover(this, event, ".h($ob).", $xg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$Gh){global$b,$w,$T,$n;$Qg=$b->tableName(table_status1($a,true));page_header(($Gh?'Edit':'Insert'),$n,array("select"=>array($a,$Qg)),$Qg);if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Jb=$_GET["set"][bracket_escape($C)];if($Jb===null){$Jb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Jb,$Uf))$Jb=$Uf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Gh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Jb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($Gh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Gh?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Gh?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}global$b,$g,$Vb,$dc,$nc,$n,$Sc,$Xc,$ba,$sd,$w,$ca,$Md,$Je,$qf,$Ig,$bd,$T,$sh,$zh,$Fh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Hc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($rh,$Ae=null){if(is_array($rh)){$tf=($Ae==1?0:1);$rh=$rh[$tf];}$rh=str_replace("%d","%s",$rh);$Ae=format_number($Ae);return
sprintf($rh,$Ae);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$tf=array_search("SQL",$b->operators);if($tf!==false)unset($b->operators[$tf]);}function
dsn($ac,$V,$G){try{parent::__construct($ac,$V,$G);}catch(Exception$sc){auth_error($sc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$_h=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Vb=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($Q,$M,$Z,$Vc,$Te=array(),$z=1,$E=0,$Af=false){global$b,$w;$zd=(count($Vc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Vc,$Te,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Vc&&$zd&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Vc&&$zd?"\nGROUP BY ".implode(", ",$Vc):"").($Te?"\nORDER BY ".implode(", ",$Te):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Eg=microtime(true);$J=$this->_conn->query($H);if($Af)echo$b->selectQuery($H,format_time($Eg));return$J;}function
delete($Q,$Jf,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Jf):" $H$Jf"));}function
update($Q,$O,$Jf,$z=0,$rg="\n"){$Qh=array();foreach($O
as$x=>$X)$Qh[]="$x = $X";$H=table($Q)." SET$rg".implode(",$rg",$Qh);return
queries("UPDATE".($z?limit1($H,$Jf):" $H$Jf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$zf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Vb["sqlite"]="SQLite 3";$Vb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$wf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Gc){$this->_link=new
SQLite3($Gc);$Th=$this->_link->version();$this->server_info=$Th["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Gc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Gc);}function
query($H,$_h=false){$oe=($_h?"unbufferedQuery":"query");$I=@$this->_link->$oe($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$pf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($pf\\.)?$pf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Gc){$this->dsn(DRIVER.":$Gc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Gc){if(is_readable($Gc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Gc)?$Gc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Gc")." AS a")){parent::__construct($Gc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$zf){$Qh=array();foreach($L
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
limit($H,$Z,$z,$D=0,$rg=" "){return" $H$Z".($z!==null?$rg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$mb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_adm_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$J=array();$zf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Jb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Jb,$B)?str_replace("''","'",$B[1]):($Jb=="NULL"?null:$Jb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($zf!="")$J[$zf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$zf=$C;}}$Cg=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Cg,$ae,PREG_SET_ORDER);foreach($ae
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Cg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Cg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$ae,PREG_SET_ORDER);foreach($ae
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Dg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$K){$C=$K["name"];$u=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$u["lengths"]=array();$u["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$hg){$u["columns"][]=$hg["name"];$u["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$Dg[$C],$Uf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Uf[2],$ae);foreach($ae[2]as$x=>$X){if($X)$u["descs"][$x]='1';}}if(!$J[""]||$u["type"]!="UNIQUE"||$u["columns"]!=$J[""]["columns"]||$u["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$u;}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
adm_view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Ac="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ac)\$~",$C)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Ac));return
false;}return
true;}function
create_database($m,$d){global$g;if(file_exists($m)){$g->error='File exists.';return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$sc){$g->error=$sc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error='File exists.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){$Kh=($Q==""||$Kc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Kh=true;break;}}$c=array();$bf=array();foreach($p
as$o){if($o[1]){$c[]=($Kh?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$bf[$o[0]]=$o[1][0];}}if(!$Kh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$bf,$Kc))return
false;if($Ka)queries("UPDATE sqlite_sequence SET seq = $Ka WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$p,$bf,$Kc,$v=array()){if($Q!=""){if(!$p){foreach(fields($Q)as$x=>$o){$p[]=process_field($o,$o);$bf[$x]=idf_escape($x);}}$_f=false;foreach($p
as$o){if($o[6])$_f=true;}$Yb=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$Yb[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Hd=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$bf[$e])continue
2;$f[]=$bf[$e].($u["descs"][$x]?" DESC":"");}if(!$Yb[$Hd]){if($u["type"]!="PRIMARY"||!$_f)$v[]=array($u["type"],$Hd,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Kc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Hd=>$q){foreach($q["source"]as$x=>$e){if(!$bf[$e])continue
2;$q["source"][$x]=idf_unescape($bf[$e]);}if(!isset($Kc[" $Hd"]))$Kc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$x=>$o)$p[$x]="  ".implode($o);$p=array_merge($p,array_filter($Kc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($Q!=""){if($bf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$bf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($bf)))." FROM ".table($Q)))return
false;$wh=array();foreach(triggers($Q)as$uh=>$hh){$th=trigger($uh);$wh[]="CREATE TRIGGER ".idf_escape($uh)." ".implode(" ",$hh)." ON ".table($C)."\n$th[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($wh
as$th){if(!queries($th))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$zf){if($zf[0]=="PRIMARY")return
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
array("Statement"=>"BEGIN\n\t;\nEND");$t='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$vh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$t\\s*(".implode("|",$vh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($t))?\\s+ON\\s*$t\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Ce=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Ce?" OF":""),"Of"=>($Ce[0]=='`'||$Ce[0]=='"'?idf_unescape($Ce):$Ce),"Trigger"=>$C,"Statement"=>$B[4],);}function
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
set_schema($lg){return
true;}function
create_sql($Q,$Ka){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($k){}function
trigger_sql($Q,$Jg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$g->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Qe){list($x,$X)=explode("=",$Qe,2);$J[$x]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Dc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Dc);}$w="sqlite";$zh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ig=array_keys($zh);$Fh=array();$Oe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Sc=array("hex","length","lower","round","unixepoch","upper");$Xc=array("avg","count","count distinct","group_concat","max","min","sum");$dc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Vb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$wf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($oc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Th=pg_version($this->_link);$this->server_info=$Th["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
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
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
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
connect($N,$V,$G){global$b;$m=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$zf){global$g;foreach($L
as$O){$Gh=array();$Z=array();foreach($O
as$x=>$X){$Gh[]="$x = $X";if(isset($zf[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Gh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$rg=" "){return" $H$Z".($z!==null?$rg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$mb){global$g;return$g->result("SHOW LC_COLLATE");}function
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
count_tables($l){return
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
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Rg=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Rg AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Rg AND ci.oid = i.indexrelid",$h)as$K){$Vf=$K["relname"];$J[$Vf]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Vf]["columns"]=array();foreach(explode(" ",$K["indkey"])as$od)$J[$Vf]["columns"][]=$f[$od];$J[$Vf]["descs"]=array();foreach(explode(" ",$K["indoption"])as$pd)$J[$Vf]["descs"][]=($pd&1?'1':null);$J[$Vf]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Je;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$Zd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Zd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Zd[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Je)~",$B[4],$Zd)?$Zd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Je)~",$B[4],$Zd)?$Zd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
adm_view($C){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){$c=array();$If=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Ph=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$If[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Ph!="")$If[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Ph!=""?substr($Ph,9):"''");}}$c=array_merge($c,$Kc);if($Q=="")array_unshift($If,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($If,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$If[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$qb!="")$If[]="COMMENT ON TABLE ".table($C)." IS ".q($qb);if($Ka!=""){}foreach($If
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$i=array();$Wb=array();$If=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Wb[]=idf_escape($X[1]);else$If[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($i)array_unshift($If,"ALTER TABLE ".table($Q).implode(",",$i));if($Wb)array_unshift($If,"DROP INDEX ".implode(", ",$Wb));foreach($If
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
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Uf))return$Uf[1];return
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
set_schema($kg){global$g,$zh,$Ig;$J=$g->query("SET search_path TO ".idf_escape($kg));foreach(types()as$U){if(!isset($zh[$U])){$zh[$U]=0;$Ig['User types'][]=$U;}}return$J;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Dc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill)$~',$Dc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$w="pgsql";$zh=array();$Ig=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array();$Oe=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Xc=array("avg","count","count distinct","max","min","sum");$dc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Vb["oracle"]="Oracle";if(isset($_GET["oracle"])){$wf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($oc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return
true;}function
query($H,$_h=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
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
select_db($k){return
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
limit($H,$Z,$z,$D=0,$rg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$mb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$mg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $mg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $mg":"")."
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
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){$c=$Wb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($Q!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Wb[]=idf_escape($o[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Wb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Wb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
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
set_schema($lg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($lg));}function
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
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Dc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Dc);}$w="oracle";$zh=array();$Ig=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array();$Oe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sc=array("length","lower","round","upper");$Xc=array("avg","count","count distinct","max","min","sum");$dc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Vb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$wf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$qd=sqlsrv_server_info($this->_link);$this->server_info=$qd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
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
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$_h=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
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
insertUpdate($Q,$L,$zf){foreach($L
as$O){$Gh=array();$Z=array();foreach($O
as$x=>$X){$Gh[]="$x = $X";if(isset($zf[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Gh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
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
limit($H,$Z,$z,$D=0,$rg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$mb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
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
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Kc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Kc)$c[""]=$Kc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Wb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Wb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Wb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Wb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
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
set_schema($kg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Dc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Dc);}$w="mssql";$zh=array();$Ig=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array();$Oe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sc=array("len","lower","round","upper");$Xc=array("avg","count","count distinct","max","min","sum");$dc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Vb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$wf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$Ih=explode(':',$N);$this->service_link=ibase_service_attach($Ih[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($k){return($k=="domain");}function
query($H,$_h=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Jc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$rg=" "){$J='';$J.=($z!==null?$rg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$mb){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Cc=false){global$g;$J=array();$Db=tables_list();foreach($Db
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
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($kg){return
true;}function
support($Dc){return
preg_match("~^(columns|sql|status|table)$~",$Dc);}$w="firebird";$Oe=array("=");$Sc=array();$Xc=array();$dc=array();}$Vb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$wf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
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
__construct($I){foreach($I
as$Cd){$K=array();if($Cd->Name!='')$K['itemName()']=(string)$Cd->Name;foreach($Cd->Attribute
as$Ha){$C=$this->_processValue($Ha->Name);$Y=$this->_processValue($Ha->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($gc){return(is_object($gc)&&$gc['encoding']=='base64'?base64_decode($gc):(string)$gc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Id=array_keys($this->_rows[0]);return(object)array('name'=>$Id[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$zf="itemName()";function
_chunkRequest($jd,$ua,$F,$wc=array()){global$g;foreach(array_chunk($jd,25)as$fb){$gf=$F;foreach($fb
as$s=>$hd){$gf["Item.$s.ItemName"]=$hd;foreach($wc
as$x=>$X)$gf["Item.$s.$x"]=$X;}if(!sdb_request($ua,$gf))return
false;}$g->affected_rows=count($jd);return
true;}function
_extractIds($Q,$Jf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Jf,$ae))$J=array_map('idf_unescape',$ae[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Jf.($z?" LIMIT 1":"")))as$Cd)$J[]=$Cd->Name;}return$J;}function
select($Q,$M,$Z,$Vc,$Te=array(),$z=1,$E=0,$Af=false){global$g;$g->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Vc,$Te,$z,$E,$Af);$g->next=0;return$J;}function
delete($Q,$Jf,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Jf,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Jf,$z=0,$rg="\n"){$Kb=array();$ud=array();$s=0;$jd=$this->_extractIds($Q,$Jf,$z);$hd=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($hd!=""&&array($hd)!=$jd))$Kb["Attribute.".count($Kb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$Ed=>$W){$ud["Attribute.$s.Name"]=$x;$ud["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Ed)$ud["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$Q);return(!$ud||$this->_chunkRequest(($hd!=""?array($hd):$jd),'BatchPutAttributes',$F,$ud))&&(!$Kb||$this->_chunkRequest($jd,'BatchDeleteAttributes',$F,$Kb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$zf){foreach($L
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
support($Dc){return
preg_match('~sql~',$Dc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$mb){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Cc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Cc){$ne=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($ne){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$ne->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
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
limit($H,$Z,$z,$D=0,$rg=" "){return" $H$Z".($z!==null?$rg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($Aa,$Db,$x,$Nf=false){$Ta=64;if(strlen($x)>$Ta)$x=pack("H*",$Aa($x));$x=str_pad($x,$Ta,"\0");$Fd=$x^str_repeat("\x36",$Ta);$Gd=$x^str_repeat("\x5C",$Ta);$J=$Aa($Gd.pack("H*",$Aa($Fd.$Db)));if($Nf)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($fd,$F['AWSAccessKeyId'],$ng)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$fd)."\n/\n$H",$ng,true)));@ini_set('track_errors',1);$Fc=@file_get_contents((preg_match('~^https?://~',$fd)?$fd:"http://$fd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Fc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$bi=simplexml_load_string($Fc);if(!$bi){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($bi->Errors){$n=$bi->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$Xg=$ua."Result";return($bi->$Xg?$bi->$Xg:true);}function
sdb_request_all($ua,$Xg,$F=array(),$gh=0){$J=array();$Eg=($gh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$bi=sdb_request($ua,$F);if(!$bi)break;foreach($bi->$Xg
as$gc)$J[]=$gc;if($z&&count($J)>=$z){$_GET["next"]=$bi->NextToken;break;}if($gh&&microtime(true)-$Eg>$gh)return
false;$F['NextToken']=$bi->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($bi->NextToken);return$J;}$w="simpledb";$Oe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Sc=array();$Xc=array("count");$dc=array(array("json"));}$Vb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$wf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$Re=array();if($V!=""){$Re["username"]=$V;$Re["password"]=$G;}if($m!="")$Re["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$Re);return
true;}catch(Exception$sc){$this->error=$sc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$sc){$this->error=$sc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Cd){$K=array();foreach($Cd
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Id=array_keys($this->_rows[0]);$C=$Id[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$zf="_id";function
select($Q,$M,$Z,$Vc,$Te=array(),$z=1,$E=0,$Af=false){$M=($M==array("*")?array():array_fill_keys($M,true));$_g=array();foreach($Te
as$X){$X=preg_replace('~ DESC$~','',$X,1,$_b);$_g[$X]=($_b?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($_g)->limit(+$z)->skip($E*$z));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$sc){$this->_conn->error=$sc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Jc){global$g;$J=array();$Hb=$g->_link->listDBs();foreach($Hb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$mb){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Cc=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_adm_view($R){}function
drop_databases($l){global$g;foreach($l
as$m){$Yf=$g->_link->selectDB($m)->drop();if(!$Yf['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$u){$Nb=array();foreach($u["key"]as$e=>$U)$Nb[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Nb,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Yf=$g->_db->selectCollection($Q)->drop();if(!$Yf['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Yf=$g->_db->selectCollection($Q)->remove();if(!$Yf['ok'])return
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
support($Dc){return
preg_match("~database|indexes~",$Dc);}$w="mongo";$Oe=array("=");$Sc=array();$Xc=array();$dc=array(array("json"));}$Vb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$wf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($nf,$vb=array(),$oe='GET'){@ini_set('track_errors',1);$Fc=@file_get_contents($this->_url.'/'.ltrim($nf,'/'),false,stream_context_create(array('http'=>array('method'=>$oe,'content'=>json_encode($vb),'ignore_errors'=>1,))));if(!$Fc){$this->error=$php_errormsg;return$Fc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Fc;return
false;}$J=json_decode($Fc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$ub=get_defined_constants(true);foreach($ub['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($nf,$vb=array(),$oe='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($nf,'/'),$vb,$oe);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Vc,$Te=array(),$z=1,$E=0,$Af=false){global$b;$Db=array();$H="$Q/_search";if($M!=array("*"))$Db["fields"]=$M;if($Te){$_g=array();foreach($Te
as$kb){$kb=preg_replace('~ DESC$~','',$kb,1,$_b);$_g[]=($_b?array($kb=>"desc"):$kb);}$Db["sort"]=$_g;}if($z){$Db["size"]=+$z;if($E)$Db["from"]=($E*$z);}foreach($Z
as$X){list($kb,$Me,$X)=explode(" ",$X,3);if($kb=="_id")$Db["query"]["ids"]["values"][]=$X;elseif($kb.$X!=""){$bh=array("term"=>array(($kb!=""?$kb:"_all")=>$X));if($Me=="=")$Db["query"]["filtered"]["filter"]["and"][]=$bh;else$Db["query"]["filtered"]["query"]["bool"]["must"][]=$bh;}}if($Db["query"]&&!$Db["query"]["filtered"]["query"]&&!$Db["query"]["ids"])$Db["query"]["filtered"]["query"]=array("match_all"=>array());$Eg=microtime(true);$mg=$this->_conn->query($H,$Db);if($Af)echo$b->selectQuery("$H: ".print_r($Db,true),format_time($Eg));if(!$mg)return
false;$J=array();foreach($mg['hits']['hits']as$ed){$K=array();if($M==array("*"))$K["_id"]=$ed["_id"];$p=$ed['_source'];if($M!=array("*")){$p=array();foreach($M
as$x)$p[$x]=$ed['fields'][$x];}foreach($p
as$x=>$X){if($Db["fields"])$X=$X[0];$K[$x]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Dc){return
preg_match("~database|table|columns~",$Dc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$mb){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Cc=false){global$g;$mg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($mg){foreach($mg["facets"]["count_by_type"]["terms"]as$Q)$J[$Q["term"]]=array("Name"=>$Q["term"],"Engine"=>"table","Rows"=>$Q["count"],);if($C!=""&&$C==$Q["term"])return$J[$C];}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_adm_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$I=$g->query("$Q/_mapping");$J=array();if($I){$Yd=$I[$Q]['properties'];if(!$Yd)$Yd=$I[$g->_db]['mappings'][$Q]['properties'];if($Yd){foreach($Yd
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($S){global$g;$J=true;foreach($S
as$Q)$J=$J&&$g->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$Oe=array("=","query");$Sc=array();$Xc=array();$dc=array(array("json"));}$Vb=array("server"=>"MySQL")+$Vb;if(!defined("DRIVER")){$wf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$sf=null,$zg=null){mysqli_report(MYSQLI_REPORT_OFF);list($fd,$sf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$fd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($sf)?$sf:ini_get("mysqli.default_port")),(!is_numeric($sf)?$sf:$zg));return$J;}function
set_charset($Za){if(parent::set_charset($Za))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Za");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Za){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Za,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Za");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$_h=false){$I=@($_h?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
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
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$_h=false){$this->setAttribute(1000,!$_h);return
parent::query($H,$_h);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$zf){$f=array_keys(reset($L));$xf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Qh=array();foreach($f
as$x)$Qh[$x]="$x = VALUES($x)";$Lg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Qh);$Qh=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Qh&&(strlen($xf)+$y+strlen($Y)+strlen($Lg)>1e6)){if(!queries($xf.implode(",\n",$Qh).$Lg))return
false;$Qh=array();$y=0;}$Qh[]=$Y;$y+=strlen($Y)+2;}return
queries($xf.implode(",\n",$Qh).$Lg);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($ig=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$ig;return$J;}function
get_databases($Jc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Jc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$rg=" "){return" $H$Z".($z!==null?$rg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$mb){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$mb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Cc=false){global$g;$J=array();foreach(get_rows($Cc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_adm_view($R){return$R["Engine"]===null;}function
fk_support($R){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$g,$Je;static$pf='`(?:[^`]|``)+`';$J=array();$Ab=$g->result("SHOW CREATE TABLE ".table($Q),1);if($Ab){preg_match_all("~CONSTRAINT ($pf) FOREIGN KEY ?\\(((?:$pf,? ?)+)\\) REFERENCES ($pf)(?:\\.($pf))? \\(((?:$pf,? ?)+)\\)(?: ON DELETE ($Je))?(?: ON UPDATE ($Je))?~",$Ab,$ae,PREG_SET_ORDER);foreach($ae
as$B){preg_match_all("~$pf~",$B[2],$Ag);preg_match_all("~$pf~",$B[5],$Yg);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Ag[0]),"target"=>array_map('idf_unescape',$Yg[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
adm_view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$d){$J=false;if(create_database($C,$d)){$Wf=array();foreach(tables_list()as$Q=>$U)$Wf[]=table($Q)." TO ".idf_escape($C).".".table($Q);$J=(!$Wf||queries("RENAME TABLE ".implode(", ",$Wf)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$La=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$La="";break;}if($u["type"]=="PRIMARY")$La=" UNIQUE";}}return" AUTO_INCREMENT$La";}function
alter_table($Q,$C,$p,$Kc,$qb,$lc,$d,$Ka,$kf){$c=array();foreach($p
as$o)$c[]=($o[1]?($Q!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($Q!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Kc);$Fg=($qb!==null?" COMMENT=".q($qb):"").($lc?" ENGINE=".q($lc):"").($d?" COLLATE ".q($d):"").($Ka!=""?" AUTO_INCREMENT=$Ka":"");if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$Fg$kf");if($Q!=$C)$c[]="RENAME TO ".table($C);if($Fg)$c[]=ltrim($Fg);return($c||$kf?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$kf):true);}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Vh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Vh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Vh,$Yg){$Wf=array();foreach(array_merge($S,$Vh)as$Q)$Wf[]=table($Q)." TO ".idf_escape($Yg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Wf));}function
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
routine($C,$U){global$g,$nc,$sd,$zh;$Ba=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$yh="((".implode("|",array_merge(array_keys($zh),$Ba)).")\\b(?:\\s*\\(((?:[^'\")]|$nc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$pf="\\s*(".($U=="FUNCTION"?"":$sd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$yh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$pf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$yh\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$pf\\s*,?~is",$B[1],$ae,PREG_SET_ORDER);foreach($ae
as$ff){$C=str_replace("``","`",$ff[2]).$ff[3];$p[]=array("field"=>$C,"type"=>strtolower($ff[5]),"length"=>preg_replace_callback("~$nc~s",'normalize_enum',$ff[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ff[8] $ff[7]"))),"null"=>1,"full_type"=>$ff[4],"inout"=>strtoupper($ff[1]),"collation"=>strtolower($ff[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
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
set_schema($kg){return
true;}function
create_sql($Q,$Ka){global$g;$J=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ka)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($Q,$Jg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Jg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Dc){global$g;return!preg_match("~scheme|sequence|type|view_trigger".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Dc);}function
kill_process($X){return
queries("KILL ".number($X));}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$w="sql";$zh=array();$Ig=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$zh+=$X;$Ig[$x]=array_keys($X);}$Fh=array("unsigned","zerofill","unsigned zerofill");$Oe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xc=array("avg","count","count distinct","group_concat","max","min","sum");$dc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.2.5";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Jc=true){return
get_databases($Jc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Vb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Vb,DRIVER),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Wd,$G){global$w;if($w=="sqlite")return
sprintf('Implement %s method to use SQLite.','login()');return
true;}function
tableName($Pg){return
h($Pg["Name"]);}function
fieldName($o,$Te=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Pg,$O=""){echo'<p class="links">';$Vd=array("select"=>'Select data');if(support("table")||support("indexes"))$Vd["table"]='Show structure';if(support("table")){if(is_adm_view($Pg))$Vd["view"]='Alter view';else$Vd["create"]='Alter table';}if($O!==null)$Vd["edit"]='New item';foreach($Vd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Pg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Og){return
array();}function
backwardKeysPrint($Na,$K){}function
selectQuery($H,$fh){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($fh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Lc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$af){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J=lang(array('%d byte','%d bytes'),strlen($af));return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
selectColumnsPrint($M,$f){global$Sc,$Xc;print_fieldset("select",'Select',$M);$s=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$s][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Sc||$Xc?"<select name='columns[$s][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Functions'=>$Sc,'Aggregation'=>$Xc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",'Search',$Z);foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ya="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Ya'",$f,$X["col"],"(".'anywhere'.")"),html_select("where[$s][op]",$this->operators,$X["op"],$Ya),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Te,$f,$v){print_fieldset("sort",'Sort',$Te);$s=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$x]),'descending')."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$f),checkbox("desc[$s]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($eh){if($eh!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($eh)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($ic,$f){}function
selectColumnsProcess($f,$v){global$Sc,$Xc;$M=array();$Vc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Sc)||in_array($X["fun"],$Xc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Xc))$Vc[]=$M[$x];}}return
array($M,$Vc);}function
selectSearchProcess($p,$v){global$g,$w;$J=array();foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$sb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$ld=process_length($X["val"]);$sb.=" ".($ld!=""?$ld:"(NULL)");}elseif($X["op"]=="SQL")$sb=" $X[val]";elseif($X["op"]=="LIKE %%")$sb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$sb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$sb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$sb;else{$nb=array();foreach($p
as$C=>$o){$Ad=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Ad)){$C=idf_escape($C);$nb[]=($w=="sql"&&$Ad&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($nb?"(".implode("$sb OR ",$nb)."$sb)":"0");}}}return$J;}function
selectOrderProcess($p,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Lc){return
false;}function
selectQueryBuild($M,$Z,$Vc,$Te,$z,$E){return"";}function
messageQuery($H,$fh){global$w;restart_session();$cd=&get_session("queries");$hd="sql-".count($cd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$cd[$_GET["db"]][]=array($H,time(),$fh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$hd' onclick=\"return !toggle('$hd');\">".'SQL command'."</a>"."<div id='$hd' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.($fh?" <span class='time'>($fh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($cd[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($o){global$dc;$J=($o["null"]?"NULL/":"");foreach($dc
as$x=>$Sc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Sc
as$pf=>$X){if(!$pf||preg_match("~$pf~",$o["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($Q,$o,$Ia,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ia value='-1' checked><i>".'original'."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ia value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ia,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($Q,$Jg,$Bd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Jg)dump_csv(array_keys(fields($Q)));}else{if($Bd==2){$p=array();foreach(fields($Q)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($Q)." (".implode(", ",$p).")";}else$i=create_sql($Q,$_POST["auto_increment"]);set_utf8mb4($i);if($Jg&&$i){if($Jg=="DROP+CREATE"||$Bd==1)echo"DROP ".($Bd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Bd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($Q,$Jg,$H){global$g,$w;$ce=($w=="sqlite"?0:1048576);if($Jg){if($_POST["format"]=="sql"){if($Jg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$p=fields($Q);}$I=$g->query($H,1);if($I){$ud="";$Wa="";$Id=array();$Lg="";$Ec=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Ec()){if(!$Id){$Qh=array();foreach($K
as$X){$o=$I->fetch_field();$Id[]=$o->name;$x=idf_escape($o->name);$Qh[]="$x = VALUES($x)";}$Lg=($Jg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Qh):"").";\n";}if($_POST["format"]!="sql"){if($Jg=="table"){dump_csv($Id);$Jg="INSERT";}dump_csv($K);}else{if(!$ud)$ud="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Id)).") VALUES";foreach($K
as$x=>$X){$o=$p[$x];$K[$x]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$ig=($ce?"\n":" ")."(".implode(",\t",$K).")";if(!$Wa)$Wa=$ud.$ig;elseif(strlen($Wa)+4+strlen($ig)+strlen($Lg)<$ce)$Wa.=",$ig";else{echo$Wa.$Lg;$Wa=$ud.$ig;}}}if($Wa)echo$Wa.$Lg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($id){return
friendly_url($id!=""?$id:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($id,$re=false){$df=$_POST["output"];$zc=(preg_match('~sql~',$_POST["format"])?"sql":($re?"tar":"csv"));header("Content-Type: ".($df=="gz"?"application/x-gzip":($zc=="tar"?"application/x-tar":($zc=="sql"||$df!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($df=="gz")ob_start('ob_gzencode',1e6);return$zc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($qe){global$ia,$w,$Vb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($qe=="auth"){$Ic=true;foreach((array)$_SESSION["pwds"]as$Sh=>$vg){foreach($vg
as$N=>$Nh){foreach($Nh
as$V=>$G){if($G!==null){if($Ic){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Ic=false;}$Hb=$_SESSION["db"][$Sh][$N][$V];foreach(($Hb?array_keys($Hb):array(""))as$m)echo"<a href='".h(auth_url($Sh,$N,$V,$m))."'>($Vb[$Sh]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$qe&&DB!=""){$g->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.2.5",'"></script>
<script type="text/javascript">
';if($S){$Vd=array();foreach($S
as$Q=>$U)$Vd[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Vd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($qe);if(DB==""||!$qe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$qe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($qe){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Fb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'database'."'>DB</span>: ".($l?"<select name='db'$Fb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($l?" class='hidden'":"").">\n";if($qe!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".'Schema'.": <select name='ns'$Fb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$Fg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select").">".'select'."</a> ";$C=$this->tableName($Fg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_adm_view($Fg)?"view":""),"structure")." title='".'Show structure'."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Oe;function
page_header($ih,$n="",$Va=array(),$jh=""){global$ca,$ia,$b,$Vb,$w;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$kh=$ih.($jh!=""?": $jh":"");$lh=strip_tags($kh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$lh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.5",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.5",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.5",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.5",'">
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
';if($Va!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Vb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Va===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Va)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Va)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Va
as$x=>$X){$Mb=(is_array($X)?$X[1]:h($X));if($Mb!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Mb</a> &raquo; ";}}echo"$ih\n";}}echo"<h2>$kh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Hh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$me=$_SESSION["messages"][$Hh];if($me){echo"<div class='message'>".implode("</div>\n<div class='message'>",$me)."</div>\n";unset($_SESSION["messages"][$Hh]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($qe=""){global$b,$T;echo'</div>

';if($qe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($qe);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($te){while($te>=2147483648)$te-=4294967296;while($te<=-2147483649)$te+=4294967296;return(int)$te;}function
long2str($W,$Xh){$ig='';foreach($W
as$X)$ig.=pack('V',$X);if($Xh)return
substr($ig,0,end($W));return$ig;}function
str2long($ig,$Xh){$W=array_values(unpack('V*',str_pad($ig,4*ceil(strlen($ig)/4),"\0")));if($Xh)$W[]=strlen($ig);return$W;}function
xxtea_mx($di,$ci,$Mg,$Ed){return
int32((($di>>5&0x7FFFFFF)^$ci<<2)+(($ci>>3&0x1FFFFFFF)^$di<<4))^int32(($Mg^$ci)+($Ed^$di));}function
encrypt_string($Hg,$x){if($Hg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Hg,true);$te=count($W)-1;$di=$W[$te];$ci=$W[0];$Hf=floor(6+52/($te+1));$Mg=0;while($Hf-->0){$Mg=int32($Mg+0x9E3779B9);$cc=$Mg>>2&3;for($ef=0;$ef<$te;$ef++){$ci=$W[$ef+1];$se=xxtea_mx($di,$ci,$Mg,$x[$ef&3^$cc]);$di=int32($W[$ef]+$se);$W[$ef]=$di;}$ci=$W[0];$se=xxtea_mx($di,$ci,$Mg,$x[$ef&3^$cc]);$di=int32($W[$te]+$se);$W[$te]=$di;}return
long2str($W,false);}function
decrypt_string($Hg,$x){if($Hg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Hg,false);$te=count($W)-1;$di=$W[$te];$ci=$W[0];$Hf=floor(6+52/($te+1));$Mg=int32($Hf*0x9E3779B9);while($Mg){$cc=$Mg>>2&3;for($ef=$te;$ef>0;$ef--){$di=$W[$ef-1];$se=xxtea_mx($di,$ci,$Mg,$x[$ef&3^$cc]);$ci=int32($W[$ef]-$se);$W[$ef]=$ci;}$di=$W[$te];$se=xxtea_mx($di,$ci,$Mg,$x[$ef&3^$cc]);$ci=int32($W[0]-$se);$W[0]=$ci;$Mg=int32($Mg-0x9E3779B9);}return
long2str($W,true);}$g='';$bd=$_SESSION["token"];if(!$bd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$qf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$qf[$x]=$X;}}function
add_invalid_login(){global$b;$Gc=get_temp_dir()."/adminer.invalid";$Qc=@fopen($Gc,"r+");if(!$Qc){$Qc=@fopen($Gc,"w");if(!$Qc)return;}flock($Qc,LOCK_EX);$xd=unserialize(stream_get_contents($Qc));$fh=time();if($xd){foreach($xd
as$yd=>$X){if($X[0]<$fh)unset($xd[$yd]);}}$wd=&$xd[$b->bruteForceKey()];if(!$wd)$wd=array($fh+30*60,0);$wd[1]++;$tg=serialize($xd);rewind($Qc);fwrite($Qc,$tg);ftruncate($Qc,strlen($tg));flock($Qc,LOCK_UN);fclose($Qc);}$Ja=$_POST["auth"];if($Ja){$xd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$wd=$xd[$b->bruteForceKey()];$ze=($wd[1]>30?$wd[0]-time():0);if($ze>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($ze/60)));session_regenerate_id();$Sh=$Ja["driver"];$N=$Ja["server"];$V=$Ja["username"];$G=(string)$Ja["password"];$m=$Ja["db"];set_password($Sh,$N,$V,$G);$_SESSION["db"][$Sh][$N][$V][$m]=true;if($Ja["permanent"]){$x=base64_encode($Sh)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Bf=$b->permanentLogin(true);$qf[$x]="$x:".base64_encode($Bf?encrypt_string($G,$Bf):"");adm_cookie("adminer_permanent",implode(" ",$qf));}if(count($_POST)==1||DRIVER!=$Sh||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)adm_redirect(auth_url($Sh,$N,$V,$m));}elseif($_POST["logout"]){if($bd&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();adm_redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($qf&&!$_SESSION["pwds"]){session_regenerate_id();$Bf=$b->permanentLogin();foreach($qf
as$x=>$X){list(,$gb)=explode(":",$X);list($Sh,$N,$V,$m)=array_map('base64_decode',explode("-",$x));set_password($Sh,$N,$V,decrypt_string(base64_decode($gb),$Bf));$_SESSION["db"][$Sh][$N][$V][$m]=true;}}function
unset_permanent(){global$qf;foreach($qf
as$x=>$X){list($Sh,$N,$V,$m)=array_map('base64_decode',explode("-",$x));if($Sh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($qf[$x]);}adm_cookie("adminer_permanent",implode(" ",$qf));}function
auth_error($n){global$b,$bd;$n=h($n);$wg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$wg]||$_GET[$wg])&&!$bd)$n='Session expired, please login again.';else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$wg]&&$_GET[$wg]&&ini_bool("session.use_only_cookies"))$n='Session support must be enabled.';$F=session_get_cookie_params();adm_cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$wf)),false);page_footer("auth");exit;}$g=connect();}$Ub=new
Min_Driver($g);if(!is_object($g)||($Wd=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?$g:(is_string($Wd)?$Wd:'Invalid credentials.')));if($Ja&&$_POST["token"])$_POST["token"]=$T;$n='';if($_POST){if(!verify_token()){$rd="max_input_vars";$ge=ini_get($rd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$ge||$X<$ge)){$rd=$x;$ge=$X;}}}$n=(!$_POST["token"]&&$ge?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$rd'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$We=array(),$z=0){global$w;$Vd=array();$v=array();$f=array();$Sa=array();$zh=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Dd=0;$Dd<count($K);$Dd++){$o=$I->fetch_field();$C=$o->name;$Ve=$o->orgtable;$Ue=$o->orgname;$J[$o->table]=$Ve;if($We&&$w=="sql")$Vd[$Dd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Ve!=""){if(!isset($v[$Ve])){$v[$Ve]=array();foreach(indexes($Ve,$h)as$u){if($u["type"]=="PRIMARY"){$v[$Ve]=array_flip($u["columns"]);break;}}$f[$Ve]=$v[$Ve];}if(isset($f[$Ve][$Ue])){unset($f[$Ve][$Ue]);$v[$Ve][$Ue]=$Dd;$Vd[$Dd]=$Ve;}}if($o->charsetnr==63)$Sa[$Dd]=true;$zh[$Dd]=$o->type;echo"<th".($Ve!=""||$o->name!=$Ue?" title='".h(($Ve!=""?"$Ve.":"").$Ue)."'":"").">".h($C).($We?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Sa[$x]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($zh[$x]==254)$X="<code>$X</code>";}if(isset($Vd[$x])&&!$f[$Vd[$x]]){if($We&&$w=="sql"){$Q=$K[array_search("table=",$Vd)];$_=$Vd[$x].urlencode($We[$Q]!=""?$We[$Q]:$Q);}else{$_="edit=".urlencode($Vd[$x]);foreach($v[$Vd[$x]]as$kb=>$Dd)$_.="&where".urlencode("[".bracket_escape($kb)."]")."=".urlencode($K[$Dd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($qg){$J=array();foreach(table_status('',true)as$Qg=>$Q){if($Qg!=$qg&&fk_support($Q)){foreach(fields($Qg)as$o){if($o["primary"]){if($J[$Qg]){unset($J[$Qg]);break;}$J[$Qg]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$nb=80){global$w;echo"<textarea name='$C' rows='$L' cols='$nb' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$o,$mb,$Mc=array()){global$Ig,$zh,$Fh,$Je;$U=$o["type"];echo'<td><select name="',h($x),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($zh[$U])&&!isset($Mc[$U]))array_unshift($Ig,$U);if($Mc)$Ig['Foreign keys']=$Mc;echo
optionlist($Ig,$U),'</select>
<td><input name="',h($x),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='".h($x)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($mb,$o["collation"]).'</select>',($Fh?"<select name='".h($x)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Fh,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($x)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Mc?"<select name='".h($x)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Je),$o["on_delete"])."</select> ":" ");}function
process_length($y){global$nc;return(preg_match("~^\\s*\\(?\\s*$nc(?:\\s*,\\s*$nc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$nc~",$y,$ae)?"(".implode(",",$ae[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($o,$lb="COLLATE"){global$Fh;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Fh)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $lb ".q($o["collation"]):"");}function
process_field($o,$xh){global$w;$Jb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($xh),($o["null"]?" NULL":" NOT NULL"),(isset($Jb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Jb))||($w=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Jb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Jb))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Jb))?$Jb:q($Jb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($p,$mb,$U="TABLE",$Mc=array(),$rb=false){global$g,$sd;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>Default value
',(support("comment")?"<td".($rb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.5' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$Xe=$o[($_POST?"orig":"field")];$Qb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$Xe=="");echo'<tr',($Qb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$sd),$o["inout"]):""),'<th>';if($Qb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($Xe),'">
';edit_type("fields[$s]",$o,$mb,$Mc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"]),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($rb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.5' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.2.5' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.2.5' alt='v' title='".'Move down'."'>&nbsp;":""),($Xe==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.5' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){ksort($p);$D=0;if($_POST["up"]){$Nd=0;foreach($p
as$x=>$o){if(key($_POST["up"])==$x){unset($p[$x]);array_splice($p,$Nd,0,array($o));break;}if(isset($o["field"]))$Nd=$D;$D++;}}elseif($_POST["down"]){$Oc=false;foreach($p
as$x=>$o){if(isset($o["field"])&&$Oc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Oc));break;}if(key($_POST["down"])==$x)$Oc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Tc,$Df,$f,$Ie){if(!$Df)return
true;if($Df==array("ALL PRIVILEGES","GRANT OPTION"))return($Tc=="GRANT"?queries("$Tc ALL PRIVILEGES$Ie WITH GRANT OPTION"):queries("$Tc ALL PRIVILEGES$Ie")&&queries("$Tc GRANT OPTION$Ie"));return
queries("$Tc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Df).$f).$Ie);}function
drop_create($Wb,$i,$Xb,$ch,$Zb,$A,$le,$je,$ke,$Fe,$we){if($_POST["drop"])query_adm_redirect($Wb,$A,$le);elseif($Fe=="")query_adm_redirect($i,$A,$ke);elseif($Fe!=$we){$Bb=queries($i);queries_adm_redirect($A,$je,$Bb&&queries($Wb));if($Bb)queries($Xb);}else
queries_adm_redirect($A,$je,queries($ch)&&queries($Zb)&&queries($Wb)&&queries($i));}function
create_trigger($Ie,$K){global$w;$hh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Ie.$hh:$hh.$Ie).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($eg,$K){global$sd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($sd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $eg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Je;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Je)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Je)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Gc,$mh){$J=pack("a100a8a8a8a12a12",$Gc,644,0,0,decoct($mh->size),decoct(time()));$eb=8*32;for($s=0;$s<strlen($J);$s++)$eb+=ord($J[$s]);$J.=sprintf("%06o",$eb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$mh->send();echo
str_repeat("\0",511-($mh->size+511)%512);}function
ini_bytes($rd){$X=ini_get($rd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($of){global$w,$g;$Jh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($of[$w]?"<a href='$Jh[$w]$of[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$R)$J+=$R["Data_length"]+$R["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$T,$n,$Vb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$n)queries_adm_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$n,false);echo"<p class='links'>\n";foreach(array('database'=>'Create new database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Vb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$lg=support("scheme");$mb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'." - <a href='".h(ME)."refresh=1'>".'Refresh'."</a>"."<td>".'Collation'."<td>".'Tables'."<td>".'Size'." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".'Compute'."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$S){$dg=h(ME)."db=".urlencode($m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"])):""),"<th><a href='$dg'>".h($m)."</a>";$d=nbsp(db_collation($m,$mb));echo"<td>".(support("database")?"<a href='$dg".($lg?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$dg&amp;schema=' id='tables-".h($m)."' title='".'Database schema'."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))adm_redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}$Je="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($wb){$this->size+=strlen($wb);fwrite($this->handler,$wb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$nc="'(?:''|[^'\\\\]|\\\\.)*'";$sd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Ub->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$R=table_status1($a,true);page_header(($p&&is_adm_view($R)?'View':'Table').": ".h($a),$n);$b->selectLinks($R);$qb=$R["Comment"];if($qb!="")echo"<p>".'Comment'.": ".h($qb)."\n";if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($o["default"])?" <span title='".'Default value'."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}if(!is_adm_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$Af=array();foreach($u["columns"]as$x=>$X)$Af[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$Af)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Mc=foreign_keys($a);if($Mc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Mc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_adm_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$wh=triggers($a);if($wh){echo"<table cellspacing='0'>\n";foreach($wh
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Sg=array();$Tg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$ae,PREG_SET_ORDER);foreach($ae
as$s=>$B){$Sg[$B[1]]=array($B[2],$B[3]);$Tg[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$oh=0;$Pa=-1;$kg=array();$Sf=array();$Rd=array();foreach(table_status('',true)as$Q=>$R){if(is_adm_view($R))continue;$tf=0;$kg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$o){$tf+=1.25;$o["pos"]=$tf;$kg[$Q]["fields"][$C]=$o;}$kg[$Q]["pos"]=($Sg[$Q]?$Sg[$Q]:array($oh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Pd=$Pa;if($Sg[$Q][1]||$Sg[$X["table"]][1])$Pd=min(floatval($Sg[$Q][1]),floatval($Sg[$X["table"]][1]))-1;else$Pa-=.1;while($Rd[(string)$Pd])$Pd-=.0001;$kg[$Q]["references"][$X["table"]][(string)$Pd]=array($X["source"],$X["target"]);$Sf[$X["table"]][$Q][(string)$Pd]=$X["target"];$Rd[(string)$Pd]=true;}}$oh=max($oh,$kg[$Q]["pos"][0]+2.5+$tf);}echo'<div id="schema" style="height: ',$oh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Tg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$oh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($kg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Zg=>$Tf){foreach($Tf
as$Pd=>$Pf){$Qd=$Pd-$Sg[$C][1];$s=0;foreach($Pf[0]as$Ag)echo"\n<div class='references' title='".h($Zg)."' id='refs$Pd-".($s++)."' style='left: $Qd"."em; top: ".$Q["fields"][$Ag]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Qd)."em;'></div></div>";}}foreach((array)$Sf[$C]as$Zg=>$Tf){foreach($Tf
as$Pd=>$f){$Qd=$Pd-$Sg[$C][1];$s=0;foreach($f
as$Yg)echo"\n<div class='references' title='".h($Zg)."' id='refd$Pd-".($s++)."' style='left: $Qd"."em; top: ".$Q["fields"][$Yg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.2.5'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Qd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($kg
as$C=>$Q){foreach((array)$Q["references"]as$Zg=>$Tf){foreach($Tf
as$Pd=>$Pf){$pe=$oh;$ee=-10;foreach($Pf[0]as$x=>$Ag){$uf=$Q["pos"][0]+$Q["fields"][$Ag]["pos"];$vf=$kg[$Zg]["pos"][0]+$kg[$Zg]["fields"][$Pf[1][$x]]["pos"];$pe=min($pe,$uf,$vf);$ee=max($ee,$uf,$vf);}echo"<div class='references' id='refl$Pd' style='left: $Pd"."em; top: $pe"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ee-$pe)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$zb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$zb.="&$x=".urlencode($_POST[$x]);adm_cookie("adminer_export",substr($zb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$zc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$_d=preg_match('~sql~',$_POST["format"]);if($_d){echo"-- Adminer $ia ".$Vb[DRIVER]." dump\n\n";if($w=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$Jg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($_d&&preg_match('~CREATE~',$Jg)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($Jg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($_d){if($Jg)echo
use_sql($m).";\n\n";$cf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$eg){foreach(get_rows("SHOW $eg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $eg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$cf.=($Jg!='DROP+CREATE'?"DROP $eg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$cf.=($Jg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($cf)echo"DELIMITER ;;\n\n$cf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Vh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Db=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Db){if($zc=="tar"){$mh=new
TmpFile;ob_start(array($mh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_adm_view($R)?2:0));if(is_adm_view($R))$Vh[]=$C;elseif($Db){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($_d&&$_POST["triggers"]&&$Q&&($wh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$wh\nDELIMITER ;\n";if($zc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$mh);}elseif($_d)echo"\n";}}foreach($Vh
as$Uh)$b->dumpTable($Uh,$_POST["table_style"],1);if($zc=="tar")echo
pack("x512");}}}if($_d)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Gb=array('','USE','DROP+CREATE','CREATE');$Ug=array('','DROP+CREATE','CREATE');$Eb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Eb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Gb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Ug,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Eb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$yf=array();if(DB!=""){$cb=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$cb onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$cb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Vh="";$Vg=tables_list();foreach($Vg
as$C=>$U){$xf=preg_replace('~_.*~','',$C);$cb=($a==""||$a==(substr($a,-1)=="%"?"$xf%":$C));$Af="<tr><td>".checkbox("tables[]",$C,$cb,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Vh.="$Af\n";else
echo"$Af<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$cb,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$yf[$xf]++;}echo$Vh;if($Vg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$xf=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$xf%",$m,"formUncheck('check-databases');","block")."\n";$yf[$xf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Ic=true;foreach($yf
as$x=>$X){if($x!=""&&$X>1){echo($Ic?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Ic=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Tc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Tc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$Tc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$dd=&get_session("queries");$cd=&$dd[DB];if(!$n&&$_POST["clear"]){$cd=array();adm_redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$n);if(!$n&&$_POST){$Qc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Qc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Qc?fread($Qc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Hf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$cd||reset(end($cd))!=$Hf){restart_session();$cd[]=array($Hf,time());set_session("queries",$dd);stop_session();}}$Bg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Lb=";";$D=0;$kc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$pb=0;$pc=array();$hf='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$ph=microtime(true);parse_str($_COOKIE["adminer_export"],$wa);$bc=$b->dumpFormat();unset($bc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Bg*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Lb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Lb)."\\s*|$hf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Oc,$tf)=$B[0];if(!$Oc&&$Qc&&!feof($Qc))$H.=fread($Qc,1e5);else{if(!$Oc&&rtrim($H)=="")break;$D=$tf+strlen($Oc);if($Oc&&rtrim($Oc)!=$Lb){while(preg_match('('.($Oc=='/*'?'\\*/':($Oc=='['?']':(preg_match('~^-- |^#~',$Oc)?"\n":preg_quote($Oc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$ig=$B[0][0];if(!$ig&&$Qc&&!feof($Qc))$H.=fread($Qc,1e5);else{$D=$B[0][1]+strlen($ig);if($ig[0]!="\\")break;}}}else{$kc=false;$Hf=substr($H,0,$tf);$pb++;$Af="<pre id='sql-$pb'><code class='jush-$w'>".shorten_utf8(trim($Hf),1000)."</code></pre>\n";if($w=="sqlite"&&preg_match("~^$Bg*+ATTACH\\b~i",$Hf,$B)){echo$Af,"<p class='error'>".'ATTACH queries are not supported.'."\n";$pc[]=" <a href='#sql-$pb'>$pb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Af;ob_flush();flush();}$Eg=microtime(true);if($g->multi_query($Hf)&&is_object($h)&&preg_match("~^$Bg*+USE\\b~i",$Hf))$h->query($Hf);do{$I=$g->store_result();$fh=" <span class='time'>(".format_time($Eg).")</span>".(strlen($Hf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Hf))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$Af:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$pc[]=" <a href='#sql-$pb'>$pb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$We=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$_e=$I->num_rows;echo"<p>".($_e?($z&&$_e>$z?sprintf('%d / ',$z):"").lang(array('%d row','%d rows'),$_e):""),$fh;$hd="export-$pb";$yc=", <a href='#$hd' onclick=\"return !toggle('$hd');\">".'Export'."</a><span id='$hd' class='hidden'>: ".html_select("output",$b->dumpOutput(),$wa["output"])." ".html_select("format",$bc,$wa["format"])."<input type='hidden' name='query' value='".h($Hf)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($Bg|\\()*+SELECT\\b~i",$Hf)&&($xc=explain($h,$Hf))){$hd="explain-$pb";echo", <a href='#$hd' onclick=\"return !toggle('$hd');\">EXPLAIN</a>$yc","<div id='$hd' class='hidden'>\n";select($xc,$h,$We);echo"</div>\n";}else
echo$yc;echo"</form>\n";}}else{if(preg_match("~^$Bg*+(CREATE|DROP|ALTER)$Bg++(DATABASE|SCHEMA)\\b~i",$Hf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$fh\n";}$Eg=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($kc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$pb-count($pc))," <span class='time'>(".format_time($ph).")</span>\n";}elseif($pc&&$pb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$pc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$uc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Hf=$_GET["sql"];if($_POST)$Hf=$_POST["query"];elseif($_GET["history"]=="all")$Hf=$cd;elseif($_GET["history"]!="")$Hf=$cd[$_GET["history"]][0];echo"<p>";textarea("query",$Hf,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$uc\n",'Limit rows'.": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$uc":'File uploads are disabled.'),"</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Show only errors')."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$cd){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($cd);$X;$X=prev($cd)){$x=key($cd);list($Hf,$fh,$fc)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.'Edit'."</a>"." <span class='time' title='".@date('Y-m-d',$fh)."'>".@date("H:i:s",$fh)."</span>"." <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Hf)))),80,"</code>").($fc?" <span class='time'>($fc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Gh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$Gh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Gh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$Bh=unique_array($_GET["where"],$v);$Kf="\nWHERE $Z";if(isset($_POST["delete"]))queries_adm_redirect($A,'Item has been deleted.',$Ub->delete($a,$Kf,!$Bh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Gh){if(!$O)adm_redirect($A);queries_adm_redirect($A,'Item has been updated.',$Ub->update($a,$O,$Kf,!$Bh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Ub->insert($a,$O);$Od=($I?last_id():0);queries_adm_redirect($A,sprintf('Item%s has been inserted.',($Od?" $Od":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Fa=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Fa="''";if($w=="sql"&&preg_match("~enum|set~",$o["type"]))$Fa="1*".idf_escape($C);$M[]=($Fa?"$Fa AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Ub->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Ub->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Ub->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$p[$x]=array("field"=>$x,"null"=>($x!=$Ub->primary),"auto_increment"=>($x==$Ub->primary));}}}edit_form($a,$p,$K,$Gh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$if=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$if[$x]=$x;$Rf=referencable_primary($a);$Mc=array();foreach($Rf
as$Qg=>$o)$Mc[str_replace("`","``",$Qg)."`".str_replace("`","``",$o["field"])]=$Qg;$Ze=array();$R=array();if($a!=""){$Ze=fields($a);$R=table_status($a);if(!$R)$n='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_adm_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$p=array();$Ca=array();$Kh=false;$Kc=array();ksort($K["fields"]);$Ye=reset($Ze);$_a=" FIRST";foreach($K["fields"]as$x=>$o){$q=$Mc[$o["type"]];$xh=($q!==null?$Rf[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($x==$K["auto_increment_col"])$o["auto_increment"]=true;$Ff=process_field($o,$xh);$Ca[]=array($o["orig"],$Ff,$_a);if($Ff!=process_field($Ye,$Ye)){$p[]=array($o["orig"],$Ff,$_a);if($o["orig"]!=""||$_a)$Kh=true;}if($q!==null)$Kc[idf_escape($o["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Mc[$o["type"]],'source'=>array($o["field"]),'target'=>array($xh["field"]),'on_delete'=>$o["on_delete"],));$_a=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Kh=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$Ye=next($Ze);if(!$Ye)$_a="";}}$kf="";if($if[$K["partition_by"]]){$lf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$lf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$kf.="\nPARTITION BY $K[partition_by]($K[partition])".($lf?" (".implode(",",$lf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$kf.="\nREMOVE PARTITIONING";$ie='Table has been altered.';if($a==""){adm_cookie("adminer_engine",$K["Engine"]);$ie='Table has been created.';}$C=trim($K["name"]);queries_adm_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$ie,alter_table($a,$C,($w=="sqlite"&&($Kh||$Kc)?$Ca:$p),$Kc,($K["Comment"]!=$R["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$kf));}}page_header(($a!=""?'Alter table':'Create table'),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($zh["int"])?"int":(isset($zh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Ze
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Rc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Rc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$lf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Rc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$lf[""]="";$K["partition_names"]=array_keys($lf);$K["partition_values"]=array_values($lf);}}}$mb=collations();$mc=engines();foreach($mc
as$lc){if(!strcasecmp($lc,$K["Engine"])){$K["Engine"]=$lc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($mc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'engine'.")")+$mc,$K["Engine"])."</select>":""),' ',($mb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".'collation'.")")+$mb,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$rb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$rb){foreach($K["fields"]as$o){if($o["comment"]!=""){$rb=true;break;}}}edit_fields($K["fields"],$mb,"TABLE",$Mc,$rb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($rb?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($rb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$jf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$if,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($jf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($jf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$nd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$nd[]="FULLTEXT";$v=indexes($a);$zf=array();if($w=="mongo"){$zf=$v["_id_"];unset($nd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$nd)){$f=array();$Td=array();$Nb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Mb=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Mb?" DESC":"");$f[]=$e;$Td[]=($y?$y:null);$Nb[]=$Mb;}}if($f){$vc=$v[$C];if($vc){ksort($vc["columns"]);ksort($vc["lengths"]);ksort($vc["descs"]);if($u["type"]==$vc["type"]&&array_values($vc["columns"])===$f&&(!$vc["lengths"]||array_values($vc["lengths"])===$Td)&&array_values($vc["descs"])===$Nb){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$vc)$c[]=array($vc["type"],$C,"DROP");if(!$c)adm_redirect(ME."table=".urlencode($a));queries_adm_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>Index Type
<th><input type="submit" style="left: -1000px; position: absolute;">Column (length)
<th>Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.2.5' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($zf){echo"<tr><td>PRIMARY<td>";foreach($zf["columns"]as$x=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$Dd=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$Dd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Dd][type]",array(-1=>"")+$nd,$u["type"],($Dd==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$s=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$Dd][columns][$s]' onchange=\"".($s==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($w=="sql"?"":$_GET["indexes"]."_"))."');\"",($p?array_combine($p,$p):$p),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$Dd][lengths][$s]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$Dd][descs][$s]",1,$u["descs"][$x],'descending'):"")," </span>";$s++;}echo"<td><input name='indexes[$Dd][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$Dd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.5' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Dd++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_adm_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_adm_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'Database has been renamed.',rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$Kg=true;$Nd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$Kg=false;$Nd=$m;}}restart_session();set_session("dbs",null);queries_adm_redirect(ME."db=".urlencode($Nd),'Database has been created.',$Kg);}}else{if(!$K["collation"])adm_redirect(substr(ME,0,-1));query_adm_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$n,array(),h(DB));$mb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$mb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Tc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Tc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($mb?html_select("collation",array(""=>"(".'collation'.")")+$mb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.5' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_adm_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,'Schema has been dropped.');else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_adm_redirect("CREATE SCHEMA ".idf_escape($C),$_,'Schema has been created.');elseif($_GET["ns"]!=$C)query_adm_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,'Schema has been altered.');else
adm_redirect($_);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$n);$eg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$ld=array();$cf=array();foreach($eg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$cf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$ld[]=$s;}if(!$n&&$_POST){$Xa=array();foreach($eg["fields"]as$x=>$o){if(in_array($x,$ld)){$X=process_input($o);if($X===false)$X="''";if(isset($cf[$x]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Xa[]=(isset($cf[$x])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Xa).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($cf)select($g->query("SELECT ".implode(", ",$cf)));}}echo'
<form action="" method="post">
';if($ld){echo"<table cellspacing='0'>\n";foreach($ld
as$x){$o=$eg["fields"][$x];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$ie=($_POST["drop"]?'Foreign key has been dropped.':($C!=""?'Foreign key has been altered.':'Foreign key has been created.'));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Yg=array();foreach($K["source"]as$x=>$X)$Yg[$x]=$K["target"][$x];$K["target"]=$Yg;if($w=="sqlite")queries_adm_redirect($A,$ie,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Wb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_adm_redirect($c.$Wb,$A,$ie);else{query_adm_redirect($c.($C!=""?"$Wb,":"")."\nADD".format_foreign_key($K),$A,$ie);$n='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$n";}}}page_header('Foreign key',$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Mc=foreign_keys($a);$K=$Mc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Ag=array_keys(fields($a));$Yg=($a===$K["table"]?$Ag:array_keys(fields($K["table"])));$Qf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$Qf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$Dd=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Ag,$X,($Dd==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Yg,$K["target"][$x]);$Dd++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Je),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Je),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$n){$C=trim($K["name"]);$Fa=" AS\n$K[select]";$A=ME."table=".urlencode($C);$ie='View has been altered.';if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($w=="pgsql"){$Fg=table_status($C);$U=($Fg?strtoupper($Fg["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$C&&$w!="sqlite"&&$U!="MATERIALIZED VIEW")query_adm_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Fa,$A,$ie);else{$ah=$C."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($C).$Fa,"DROP $U ".table($C),"CREATE $U ".table($ah).$Fa,"DROP $U ".table($ah),($_POST["drop"]?substr(ME,0,-1):$A),'View has been dropped.',$ie,'View has been created.',$a,$C);}}if(!$_POST&&$a!=""){$K=adm_view($a);$K["name"]=$a;if(!$n)$n=error();}page_header(($a!=""?'Alter view':'Create view'),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$vd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Gg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_adm_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$vd)&&isset($Gg[$K["STATUS"]])){$jg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_adm_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$jg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$jg)."\n".$Gg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
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
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$eg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$ah="$K[name]_adminer_".uniqid();drop_create("DROP $eg ".idf_escape($da),create_routine($eg,$K),"DROP $eg ".idf_escape($K["name"]),create_routine($eg,array("name"=>$ah)+$K),"DROP $eg ".idf_escape($ah),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$n);if(!$_POST&&$da!=""){$K=routine($da,$eg);$K["name"]=$da;}$mb=get_vals("SHOW CHARACTER SET");sort($mb);$fg=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($fg?'Language'.": ".html_select("language",$fg,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$mb,$eg);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$mb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_adm_redirect("DROP SEQUENCE ".idf_escape($fa),$_,'Sequence has been dropped.');elseif($fa=="")query_adm_redirect("CREATE SEQUENCE ".idf_escape($C),$_,'Sequence has been created.');elseif($fa!=$C)query_adm_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,'Sequence has been altered.');else
adm_redirect($_);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_adm_redirect("DROP TYPE ".idf_escape($ga),$_,'Type has been dropped.');else
query_adm_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$vh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$vh["Timing"])&&in_array($_POST["Event"],$vh["Event"])&&in_array($_POST["Type"],$vh["Type"])){$Ie=" ON ".table($a);$Wb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Ie:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_adm_redirect($Wb,$A,'Trigger has been dropped.');else{if($C!="")queries($Wb);queries_adm_redirect($A,($C!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Ie,$_POST)));if($C!="")queries(create_trigger($Ie,$K+array("Type"=>reset($vh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'Alter trigger'.": ".h($C):'Create trigger'),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$vh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>Event<td>',html_select("Event",$vh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$vh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>Type<td>',html_select("Type",$vh["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Df=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$xb)$Df[$xb][$K["Privilege"]]=$K["Comment"];}$Df["Server Admin"]+=$Df["File access on server"];$Df["Databases"]["Create routine"]=$Df["Procedures"]["Create routine"];unset($Df["Procedures"]["Create routine"]);$Df["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Df["Columns"][$X]=$Df["Tables"][$X];unset($Df["Server Admin"]["Usage"]);foreach($Df["Tables"]as$x=>$X)unset($Df["Databases"][$x]);$ve=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$ve[$X]=(array)$ve[$X]+(array)$_POST["grants"][$x];}$Uc=array();$Ge="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$ae,PREG_SET_ORDER)){foreach($ae
as$X){if($X[1]!="USAGE")$Uc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Uc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Ge=$B[1];}}if($_POST&&!$n){$He=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_adm_redirect("DROP USER $He",ME."privileges=",'User has been dropped.');else{$xe=q($_POST["user"])."@".q($_POST["host"]);$mf=$_POST["pass"];if($mf!=''&&!$_POST["hashed"]){$mf=$g->result("SELECT PASSWORD(".q($mf).")");$n=!$mf;}$Bb=false;if(!$n){if($He!=$xe){$Bb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $xe IDENTIFIED BY PASSWORD ".q($mf));$n=!$Bb;}elseif($mf!=$Ge)queries("SET PASSWORD FOR $xe = ".q($mf));}if(!$n){$bg=array();foreach($ve
as$Be=>$Tc){if(isset($_GET["grant"]))$Tc=array_filter($Tc);$Tc=array_keys($Tc);if(isset($_GET["grant"]))$bg=array_diff(array_keys(array_filter($ve[$Be],'strlen')),$Tc);elseif($He==$xe){$Ee=array_keys((array)$Uc[$Be]);$bg=array_diff($Ee,$Tc);$Tc=array_diff($Tc,$Ee);unset($Uc[$Be]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Be,$B)&&(!grant("REVOKE",$bg,$B[2]," ON $B[1] FROM $xe")||!grant("GRANT",$Tc,$B[2]," ON $B[1] TO $xe"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($He!=$xe)queries("DROP USER $He");elseif(!isset($_GET["grant"])){foreach($Uc
as$Be=>$bg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Be,$B))grant("REVOKE",array_keys($bg),$B[2]," ON $B[1] FROM $xe");}}}queries_adm_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$n);if($Bb)$g->query("DROP USER $xe");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$n,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$Uc=$ve;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ge;if($Ge!="")$K["hashed"]=true;$Uc[(DB==""||$Uc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Uc
as$Be=>$Tc){echo'<th>'.($Be!="*.*"?"<input name='objects[$s]' value='".h($Be)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$xb=>$Mb){foreach((array)$Df[$xb]as$Cf=>$qb){echo"<tr".odd()."><td".($Mb?">$Mb<td":" colspan='2'").' lang="en" title="'.h($qb).'">'.h($Cf);$s=0;foreach($Uc
as$Be=>$Tc){$C="'grants[$s][".h(strtoupper($Cf))."]'";$Y=$Tc[strtoupper($Cf)];if($xb=="Server Admin"&&$Be!=(isset($Uc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Cf=="All privileges"?" id='grants-$s-all'":($Cf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Kd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Kd++;}queries_adm_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Kd),$Kd||!$_POST["kill"]);}page_header('Process list',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$w=="sql"?"Id":"pid"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".sprintf('%d in total',max_connections()),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$p=fields($a);$Mc=column_foreign_keys($a);$De="";if($R["Oid"]){$De=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($De));}parse_str($_COOKIE["adminer_import"],$xa);$cg=array();$f=array();$eh=null;foreach($p
as$x=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$eh=$b->selectLengthProcess();}$cg+=$o["privileges"];}list($M,$Vc)=$b->selectColumnsProcess($f,$v);$zd=count($Vc)<count($M);$Z=$b->selectSearchProcess($p,$v);$Te=$b->selectOrderProcess($p,$v);$z=$b->selectLimitProcess();$Rc=($M?implode(", ",$M):"*".($De?", $De":"")).convert_fields($f,$p,$M)."\nFROM ".table($a);$Wc=($Vc&&$zd?"\nGROUP BY ".implode(", ",$Vc):"").($Te?"\nORDER BY ".implode(", ",$Te):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ch=>$K){$Fa=convert_field($p[key($K)]);$M=array($Fa?$Fa:idf_escape(key($K)));$Z[]=where_check($Ch,$p);$J=$Ub->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$Zh=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$db=array();foreach($_POST["check"]as$ab)$db[]=where_check($ab,$p);$Zh[]="((".implode(") OR (",$db)."))";}$Zh=($Zh?"\nWHERE ".implode(" AND ",$Zh):"");$zf=$Eh=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$zf=array_flip($u["columns"]);$Eh=($M?$zf:array());break;}}foreach((array)$Eh
as$x=>$X){if(in_array(idf_escape($x),$M))unset($Eh[$x]);}if($_POST["export"]){adm_cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Eh===array())$H="SELECT $Rc$Zh$Wc";else{$Ah=array();foreach($_POST["check"]as$X)$Ah[]="(SELECT".limit($Rc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Wc,1).")";$H=implode(" UNION ALL ",$Ah);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Mc)){if($_POST["save"]||$_POST["delete"]){$I=true;$ya=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Eh===array()&&is_array($_POST["check"]))||$zd){$I=($_POST["delete"]?$Ub->delete($a,$Zh):($_POST["clone"]?queries("INSERT $H$Zh"):$Ub->update($a,$O,$Zh)));$ya=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Yh="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Ub->delete($a,$Yh,1):($_POST["clone"]?queries("INSERT".limit1($H,$Yh)):$Ub->update($a,$O,$Yh)));if(!$I)break;$ya+=$g->affected_rows;}}}$ie=lang(array('%d item has been affected.','%d items have been affected.'),$ya);if($_POST["clone"]&&$I&&$ya==1){$Od=last_id();if($Od)$ie=sprintf('Item%s has been inserted.'," $Od");}queries_adm_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ie,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n='Ctrl+click on a value to modify it.';else{$I=true;$ya=0;foreach($_POST["val"]as$Ch=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$p[$x]["type"])||$X!=""?$b->processInput($p[$x],$X):"NULL");}$I=$Ub->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Ch,$p),!($zd||$Eh===array())," ");if(!$I)break;$ya+=$g->affected_rows;}queries_adm_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ya),$I);}}elseif(!is_string($Fc=get_file("csv_file",true)))$n=upload_error($Fc);elseif(!preg_match('~~u',$Fc))$n='File must be in UTF-8 encoding.';else{adm_cookie("adminer_import","output=".urlencode($xa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$nb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fc,$ae);$ya=count($ae[0]);$Ub->begin();$rg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($ae[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$rg]*)$rg~",$X.$rg,$be);if(!$x&&!array_diff($be[1],$nb)){$nb=$be[1];$ya--;}else{$O=array();foreach($be[1]as$s=>$kb)$O[idf_escape($nb[$s])]=($kb==""&&$p[$nb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$kb))));$L[]=$O;}}$I=(!$L||$Ub->insertUpdate($a,$L,$zf));if($I)$Ub->commit();queries_adm_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ya),$I);$Ub->rollback();}}}$Qg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Qg",$n);$O=null;if(isset($cg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Mc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($Te,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($eh);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Pc=$g->result(count_rows($a,$Z,$zd,$Vc));$E=floor(max(0,$Pc-1)/$z);}$og=$M;if(!$og){$og[]="*";if($De)$og[]=$De;}$yb=convert_fields($f,$p,$M);if($yb)$og[]=substr($yb,2);$I=$Ub->select($a,$og,$Z,$Vc,$Te,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$jc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Vc&&$zd&&$w=="sql")$Pc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Oa=$b->backwardKeys($a,$Qg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Vc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$ue=array();$Sc=array();reset($M);$Mf=1;foreach($L[0]as$x=>$X){if($x!=$De){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$x];$C=($o?$b->fieldName($o,$Mf):($X["fun"]?"*":$x));if($C!=""){$Mf++;$ue[$x]=$C;$e=idf_escape($x);$gd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Mb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($gd.($Te[0]==$e||$Te[0]==$x||(!$Te&&$zd&&$Vc[0]==$e)?$Mb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($gd.$Mb)."' title='".'descending'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Sc[$x]=$X["fun"];next($M);}}$Td=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Td[$x]=max($Td[$x],min(40,strlen(utf8_decode($X))));}}echo($Oa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Mc)as$te=>$K){$Bh=unique_array($L[$te],$v);if(!$Bh){$Bh=array();foreach($L[$te]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$Bh[$x]=$X;}}$Ch="";foreach($Bh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($w=='sql'&&preg_match("~^utf8_~",$p[$x]["collation"])?$x:"CONVERT($x USING ".charset($g).")").")";$X=md5($X);}$Ch.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Vc&&$M?"":"<td>".checkbox("check[]",substr($Ch,1),in_array(substr($Ch,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($zd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Ch)."'>".'edit'."</a>"));foreach($K
as$x=>$X){if(isset($ue[$x])){$o=$p[$x];if($X!=""&&(!isset($jc[$x])||$jc[$x]!=""))$jc[$x]=(is_mail($X)?$ue[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$Ch;if(!$_&&$X!==null){foreach((array)$Mc[$x]as$q){if(count($Mc[$x])==1||end($q["source"])==$x){$_="";foreach($q["source"]as$s=>$Ag)$_.=where_link($s,$q["target"][$s],$L[$te][$Ag]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if(count($q["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Bh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Bh
as$Ed=>$W)$_.=where_link($s++,$Ed,$W);}$X=select_value($X,$_,$o,$eh);$hd=h("val[$Ch][".bracket_escape($x)."]");$Y=$_POST["val"][$Ch][bracket_escape($x)];$ec=!is_array($K[$x])&&is_utf8($X)&&$L[$te][$x]==$K[$x]&&!$Sc[$x];$dh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$ec)||$Y!==null){$Yc=h($Y!==null?$Y:$K[$x]);echo"<td>".($dh?"<textarea name='$hd' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$Yc</textarea>":"<input name='$hd' value='$Yc' size='$Td[$x]'>");}else{$Xd=strpos($X,"<i>...</i>");echo"<td id='$hd' onclick=\"selectClick(this, event, ".($Xd?2:($dh?1:0)).($ec?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Oa)echo"<td>";$b->backwardKeysPrint($Oa,$L[$te]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$tc=true;if($_GET["page"]!="last"){if(!+$z)$Pc=count($L);elseif($w!="sql"||!$zd){$Pc=($zd?false:found_rows($R,$Z));if($Pc<max(1e4,2*($E+1)*$z))$Pc=reset(slow_query(count_rows($a,$Z,$zd,$Vc)));else$tc=false;}}if(+$z&&($Pc===false||$Pc>$z||$E)){echo"<p class='pages'>";$de=($Pc===false?$E+(count($L)>=$z?2:1):floor(($Pc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($de,$E+5);$s++)echo
pagination($s,$E);if($de>0){echo($E+5<$de?" ...":""),($tc&&$Pc!==false?pagination($de,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$de'>".'last'."</a>");}echo(($Pc===false?count($L)+1:$Pc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'...\');" class="loadmore">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($de>$E?pagination($E+1,$E).($de>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Pc!==false?"(".($tc?"":"~ ").lang(array('%d row','%d rows'),$Pc).") ":"");$Rb=($tc?"":"~ ").$Pc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Rb' : checked); selectCount('selected2', this.checked || !checked ? '$Rb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Nc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Nc['sql']);break;}}if($Nc){print_fieldset("export",'Export'." <span id='selected2'></span>");$df=$b->dumpOutput();echo($df?html_select("output",$df,$xa["output"])." ":""),html_select("format",$Nc,$xa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$Vc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$xa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($jc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Fg=isset($_GET["status"]);page_header($Fg?'Status':'Variables');$Rh=($Fg?show_status():show_variables());if(!$Rh)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Rh
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Fg?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Ng=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){json_row("Comment-$C",nbsp($R["Comment"]));if(!is_adm_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$C",nbsp($R[$x]));foreach($Ng+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=format_number($R[$x]);json_row("$x-$C",($x=="Rows"&&$X&&$R["Engine"]==($Cg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Ng[$x]))$Ng[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$C");}}}foreach($Ng
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Wg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Wg&&!$n&&!$_POST["search"]){$I=true;$ie="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$ie='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ie='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ie='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$ie='Tables have been dropped.';}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$ie='Tables have been optimized.';}elseif(!$_POST["tables"])$ie='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$ie.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_adm_redirect(substr(ME,0,-1),$ie,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Vg=tables_list();if(!$Vg)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Sb=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.'Table','<td>'.'Engine'.doc_link(array('sql'=>'storage-engines.html')),'<td>'.'Collation'.doc_link(array('sql'=>'charset-mysql.html')),'<td>'.'Data Length'.$Sb,'<td>'.'Index Length'.$Sb,'<td>'.'Data Free'.$Sb,'<td>'.'Auto Increment'.doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.'Rows'.$Sb,(support("comment")?'<td>'.'Comment'.$Sb:''),"</thead>\n";$S=0;foreach($Vg
as$C=>$U){$Uh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Uh?"views[]":"tables[]"),$C,in_array($C,$Wg,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.'Show structure'.'">'.h($C).'</a>':h($C));if($Uh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Alter view'.'">'.(preg_match('~materialized~i',$U)?'Materialized View':'View').'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$x=>$_){$hd=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$hd title='$_[1]'>?</a>":"<span$hd>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Vg)),"<td>".nbsp($w=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Oh="<input type='submit' value='".'Vacuum'."'".on_help("'VACUUM'")."> ";$Pe="<input type='submit' name='optimize' value='".'Optimize'."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($w=="sqlite"?$Oh:($w=="pgsql"?$Oh.$Pe:($w=="sql"?"<input type='submit' value='".'Analyze'."'".on_help("'ANALYZE TABLE'")."> ".$Pe."<input type='submit' name='check' value='".'Check'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Repair'."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".'Truncate'."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".'Drop'."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$w!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.'Create materialized view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$gg=routines();if($gg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($gg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$sg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($sg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($sg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Mh=types();if($Mh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Mh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$rc=$g->result("SELECT @@event_scheduler");if($rc&&$rc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($rc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Vg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();