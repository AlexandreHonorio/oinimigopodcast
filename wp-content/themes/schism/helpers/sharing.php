<?php
/**
 * The sharing helpers.
 *
 * @package theme\helpers
 */

/**
 * Sharing post functionality.
 *
 * @since 1.0.0
 */
function schism_sharing_template() {
	global $post;
	$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), false, '' );
	$permalink = get_permalink( $post->ID );
	$title = get_the_title();
	?>
	<ul>
		<li>
			<a data-type="schism-facebook" href="http://www.facebook.com/sharer?u=<?php echo esc_attr( $permalink ); ?>&amp;<?php echo esc_attr( $title ); ?>" target="_blank" class="schism-share__facebook">
				<span class="screen-reader-text">
					<strong><?php esc_html_e( 'Share', 'schism' ); ?></strong> <?php esc_html_e( 'on Facebook', 'schism' ); ?>
				</span>
				<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m13.3333333 10.3333333h1.6666667l-.2083333 1.6666667h-1.4583334v5h-2.1614583v-5h-1.171875v-1.6666667h1.171875v-1.11979163c0-.72917.1822898-1.28038.546875-1.653645.364585-.37326667.9722183-.55989667 1.8229167-.55989667h1.4583333v1.66666667h-.8854167c-.3298633 0-.542535.05208333-.63802.15625-.0954866.10416666-.14323.27777666-.14323.52083333z" fill-rule="evenodd"/></svg>
			</a>
		</li>
		<li>
			<a data-type="schism-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_attr( $permalink ); ?>&amp;title=<?php echo esc_attr( $title ); ?>&amp;summary=&amp;source=<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<span class="screen-reader-text">
					<strong><?php esc_html_e( 'Share', 'schism' ); ?></strong> <?php esc_html_e( 'on LinkedIn', 'schism' ); ?>
				</span>
				<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m9.27213579 10.1054683v6.4518225h-2.14843787v-6.4518225zm.13671874-1.99218832c.00434.31684187-.10525083.58159644-.32877687.79427102-.22352457.21267458-.51757561.31901041-.88216098.31901041h-.01302087c-.35590449 0-.64235995-.10633583-.85937496-.31901041-.21701499-.21267458-.32552085-.47742915-.32552085-.79427102 0-.32118187.11176104-.58702145.33528643-.79752603.22352545-.21050458.5154062-.31575395.87565098-.31575395.36024464 0 .64887068.10524937.86588526.31575395.21701457.21050458.32769186.47634416.33203186.79752603zm7.59114547 4.74609472v3.6979161h-2.141927v-3.4505201c0-.4557321-.0878894-.812716-.2636725-1.0709635-.1757817-.258249-.4503013-.3873698-.8235675-.3873698-.273439 0-.5023856.0748679-.6868488.2246081-.1844631.1497417-.3222654.3352854-.4134112.5566415-.0477429.1302087-.0716144.3059889-.0716144.5273435v3.6002603h-2.141927c.00868-1.7317795.01302-3.1358453.01302-4.2122397 0-1.0763943-.00217-1.7187493-.00651-1.9270824l-.00651-.3125004h2.141927v.9374997h-.0130214c.0868058-.1388902.1757816-.260416.2669275-.3645833.0911458-.1041673.2137581-.2170131.3678383-.3385419.1540802-.1215287.3428804-.2159281.5664064-.2832024.2235246-.06727442.4720042-.10091234.7454432-.10091234.742191 0 1.338973.24630814 1.7903637.73893314.4513906.4926235.6770837 1.2141879.6770837 2.1647135z" fill-rule="evenodd"/></svg>
			</a>
		</li>

		<?php if ( $src ) : ?>
			<li>
				<a data-type="schism-pinterest" href="//pinterest.com/pin/create/button/?url=<?php echo esc_attr( $permalink ); ?>&amp;media=<?php echo urlencode( $src[0] ); ?>&amp;description=<?php echo esc_attr( $title ); ?>" target="_blank" class="schism-share__pinterest">
					<span class="screen-reader-text">
						<strong><?php esc_html_e( 'Pin', 'schism' ); ?></strong> <?php esc_html_e( 'this item', 'schism' ); ?>
					</span>
					<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m8 10.5877398c0-.4326942.07511944-.84034195.22536057-1.22295659.15024114-.38261463.35757079-.71614446.62199527-1.00060159.26442434-.28445579.56890847-.53084773.91346195-.73918255.34455211-.20833347.71514161-.3645829 1.11177911-.46874964.3966362-.10416673.8012793-.15624943 1.2139414-.15624943.6330168 0 1.2219524.13321135 1.766827.39963945.5448747.26642674.9875789.65404369 1.3281249 1.16286026.3405473.50881656.5108183 1.08373063.5108183 1.72475969 0 .3846177-.0380611.7612164-.1141834 1.1298082-.0761224.3685904-.1963124.7231552-.3605768 1.0637012-.1642631.3405473-.3645816.6400235-.6009608.8984379-.2363806.2584145-.5268416.4647422-.8713951.6189899-.3445534.1542477-.7231552.2313702-1.1358173.2313702-.2724373 0-.5428676-.0641012-.8112974-.1923075-.2684312-.1282051-.4607373-.3044866-.5769239-.528846-.0400642.1562507-.096153.381609-.1682692.6760815-.0721162.2944726-.1191898.4847756-.1412264.5709133-.0220351.0861391-.0630996.2283643-.1231959.4266837-.0600977.1983181-.1121804.3405433-.1562508.4266824-.0440704.0861381-.1081729.2113371-.1923075.3756007s-.1762816.3195106-.2764421.4657453c-.1001606.1462347-.22435813.3195102-.3725966.5198317l-.08413462.0300481-.05408578-.0600962c-.06009769-.6290096-.09014519-1.0056084-.09014519-1.1298078 0-.3685909.04306884-.7822492.12920654-1.2409861.08613904-.4587356.2193504-1.0346513.39963945-1.7277644.1802904-.6931117.2844558-1.0997593.3125002-1.219952-.128205-.2604175-.1923075-.5989563-.1923075-1.0156246 0-.3325337.1041654-.64503123.3125002-.93750067s.4727545-.43870079.7932697-.43870079c.2443915 0 .4346946.08112865.5709133.24338866.1362186.16226001.2043273.36758753.2043273.6159852 0 .264425-.0881408.647033-.2644237 1.1478372-.1762829.5008043-.2644236.8753999-.2644236 1.1237976 0 .2524052.0901438.4617389.2704329.628005.1802903.1662675.3986365.2493993.6550479.2493993.2203546 0 .4246792-.0500797.6129819-.1502402.1883014-.1001606.3455524-.2363779.4717543-.4086533.1262019-.1722768.238381-.3625799.3365385-.5709147.0981575-.2083335.1742784-.4296856.2283656-.6640618.0540871-.2343761.09415-.4567298.1201927-.6670677.0260413-.2103379.0390613-.4096548.0390613-.5979562 0-.69311309-.2193477-1.23297062-.6580525-1.61959141-.4387035-.38662079-1.010613-.5799285-1.7157446-.5799285-.8012873 0-1.47035.25941329-2.00721237.77824524-.536861.5188333-.80528826 1.17687911-.80528826 1.97415897 0 .1762829.02503981.3465539.0751201.5108169.05008042.1642645.10416647.2944712.16225947.3906256.05809327.0961545.11217904.1872985.16226001.2734376.05007962.0861377.07511943.1472355.07511943.1832936 0 .1121791-.03004751.2584118-.09014386.4387008-.06009634.1802904-.13421423.2704329-.22235555.2704329-.00801284 0-.04206704-.0060092-.10216352-.018029-.20432799-.0600964-.38561616-.1722741-.54387015-.3365385-.15825412-.1642631-.28044842-.3535646-.36658665-.5679087-.08613824-.214344-.15124174-.4306871-.19531248-.6490373-.04407074-.2183516-.06610577-.4316901-.06610577-.6400249z" fill-rule="evenodd"/></svg>
				</a>
			</li>
		<?php endif; ?>

		<li>
			<a data-type="schism-twitter" href="http://twitter.com/intent/tweet?text=Currently reading <?php echo esc_attr( $title ); ?>&amp;url=<?php echo esc_attr( $permalink ); ?>" target="_blank" class="schism-share__twitter">
				<span class="screen-reader-text">
					<strong><?php esc_html_e( 'Tweet', 'schism' ); ?></strong> <?php esc_html_e( 'this item', 'schism' ); ?>
				</span>
				<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m17 8.96446786c-.2834183.41455352-.6260544.76776429-1.0279184 1.05964374.0042298.0592221.0063448.1480546.0063448.2664974 0 .5499186-.0803714 1.0987712-.241117 1.6465749-.1607442.5478023-.4050321 1.0733893-.7328681 1.5767767-.3278345.503386-.7180593.9486017-1.1706843 1.3356594-.452625.3870578-.9983052.6958533-1.6370563.9263959-.6387511.2305427-1.3219085.3458122-2.049492.3458122-1.14636842 0-2.19542726-.3066806-3.1472087-.9200507.14805491.0169205.31302793.0253806.4949239.0253806.95178073 0 1.79991213-.2918752 2.5444165-.8756349-.44416527-.0084597-.84179229-.1448794-1.19289383-.4092634-.35110153-.2643839-.5922158-.6017328-.72335004-1.0120565.13959451.0211507.26861183.0317267.38705582.0317267.18189625 0 .36167473-.0232655.53933971-.0697967-.47377565-.0972936-.86611479-.3331204-1.17703008-.7074875-.31091528-.3743672-.46637057-.8090082-.46637057-1.3039345v-.0253805c.28764941.1607456.59644508.2474617.92639595.2601527-.27918929-.1861261-.50126824-.4293566-.66624368-.7296957-.16497544-.3003405-.24746188-.62605585-.24746188-.97715739 0-.3722522.09306163-.71700328.27918773-1.03426461.51184699.6302914 1.13472577 1.13472776 1.86865555 1.51332473.73392832.37859837 1.51966522.58904467 2.35723342.63134597-.0338417-.1607455-.0507625-.3172584-.0507625-.4695429 0-.56683943.1998717-1.05012513.5996193-1.44987419.3997491-.39974763.8830348-.59961931 1.4498742-.59961931.5922185 0 1.0913676.21573361 1.4974614.64720795.4610861-.0888325.8946683-.25380509 1.3007621-.49492348-.1565158.48646662-.4568506.86294298-.9010159 1.12944188.3934029-.04230133.7868-.14805321 1.1802029-.31725849z" fill-rule="evenodd"/></svg>
			</a>
		</li>
		<li>
			<a data-type="schism-email" target="_blank" href="mailto:entertheaddress@example.com?subject=<?php echo esc_attr( $title ); ?>&amp;body=<?php echo esc_attr( $permalink ); ?>" class="schism-share__email">
				<span class="screen-reader-text">
					<strong><?php esc_html_e( 'Email', 'schism' ); ?></strong> <?php esc_html_e( 'a friend', 'schism' ); ?>
				</span>
				<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m17 10.5334812v4.4308042c0 .2455369-.087425.4557282-.2622762.6305804-.1748525.174852-.3850438.2622767-.6305813.2622767h-8.21428538c-.24553687 0-.45572825-.0874247-.63058037-.2622767-.17485203-.1748522-.26227675-.3850435-.26227675-.6305804v-4.4308042c.16369125.1822926.3515615.3441213.56361613.4854913 1.34673262.9151838 2.27120262 1.5569187 2.77343767 1.9252238.212055.15625.3841137.2780874.5161825.3655137.13207.087425.3078487.17671.5273437.2678562.219495.0911463.4241062.1367188.61384.1367188h.00558.00558c.1897338 0 .394345-.0455725.61384-.1367188.219495-.0911462.3952737-.1804312.5273438-.2678562.1320687-.0874263.3041275-.2092637.5161825-.3655137.6324437-.4575913 1.5587737-1.0993263 2.7790174-1.9252238.212055-.14509.3980651-.3069188.5580363-.4854913zm0-1.64062495c0 .29390125-.091145.57477625-.2734375.842635-.1822925.26785755-.409225.49664995-.6808037.68638375-1.3988163.9709863-2.2693438 1.5755188-2.6116076 1.8136162-.0372025.0260413-.1162562.0827738-.2371649.1702001-.1209075.0874262-.2213538.15811-.3013388.2120537-.0799862.0539438-.1767112.1143975-.2901787.1813613-.1134675.066965-.2204238.1171875-.32087.1506699-.1004476.0334826-.1934525.0502238-.2790188.0502238h-.00558-.00558c-.0855662 0-.1785712-.0167412-.2790188-.0502238-.1004462-.0334824-.2074024-.0837049-.32087-.1506699-.1134674-.0669638-.2101924-.1274175-.2901787-.1813613-.079985-.0539437-.1804313-.1246275-.3013387-.2120537-.1209088-.0874263-.1999625-.1441588-.237165-.1702001-.3385438-.2380974-.82589005-.5775649-1.4620538-1.0184162-.63616375-.44085-1.01748487-.7059137-1.14397363-.7952-.23065587-.1562513-.44828762-.3710925-.65290175-.64453125-.20461409-.27343875-.30691962-.5273425-.30691962-.76171875 0-.29018.07719416-.53199375.23158488-.72544625.15439062-.19345375.3748125-.29017875.66127224-.29017875h8.21428538c.2418175 0 .4510788.08742375.62779.26227625.1767125.1748525.2650675.38504375.2650675.63058z" fill-rule="evenodd"/></svg>
			</a>
		</li>
	</ul>
	<?php
}

add_action( 'schism_sharing', 'schism_sharing_template' );