<?php

# No direct access
$secureSrcClassName  = 'WCFE\Modules\Editor\Model\EmergencyRestore';
( class_exists( $secureSrcClassName ) && ( get_class( $this ) == $secureSrcClassName ) ) or die( 'Access Denied' );

$data = array();

$data[ 'secureKey' ] 	= '7a57a3c934826666d91306ac8778fc22';
$data[ 'backupFileHash' ] 	= 'b8815421e253bb0a1f2d39b5943cfe5c';

$data[ 'absPath' ] 	= '/var/www/oinimigopodcast.hipermoderno.com.br';
$data[ 'contentDir' ] 	= '/var/www/oinimigopodcast.hipermoderno.com.br/wp-content/wcfe-7e95a3774cead44d62868d3bf9db5c5b';

$data[ 'timeCreated' ] 	= 1598576652;

$data[ 'privateKey' ] = 'kE2}sI24[Tkqs4Ozci0]NES5US2MqL;m?Ftht5_3qN|FwDFURYWT{ZDjG#;%0v2OP1e:L>AEgpi,+(1x~j,: n-D#6~4?13T3B_{~mje`IQq$L=+mhiGl|P+do}NyL.M8}}qr~=,N|Po-l|I<O!MNCapcH~uAGyf]&M4s?{oR!hze}=L R:r7TGH ^=4pHDAx#.uIVu-mB6e=3<amdHsS}v#*L9_JSllKR_`o~iH[3,{hHj`^Y4V6E$S;LbXuU!z8e0bvg;!]1/uEZDp=2JV ., 4/$,UD&<44dHAGv6*](RSS)K|1$Hw$JN-D~~@,QH:0*e)C4rb{qPUI$E`IFUs(;)-7_e%e{u]5KTDFTGNvypO;J@VN-{]<@gvYY~bVAqj?#`G6[~h<vJ-yF~O0PgWwnYpZR-+{k|Bf:,K?o;+;QbD<yz._7^(IR|kY.<ko.60=~#hrn=Mr2H&8^:!gahbRqY5y7/E l`|<.ypBx|?u[,S~k6*[@t+6zHL:.IZle-';

return $data;