<?php
    function Reklama_widget(){
		wp_add_dashboard_widget('widget_reklama_wp', 'Reklama ThriveLeads čeština', 'Reklama_widgetCZ');
	}

	function Reklama_widgetCZ(){
		?>
		<div class="thriveleads-cestina-widget">
		  <p><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- web zákazníci -->
<ins class="adsbygoogle" style="display:block"
     data-ad-client="ca-pub-8994596045023515"
     data-ad-slot="5057225425"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
		</div>
		<?php
	}

    	add_action('wp_dashboard_setup', 'Reklama_widget');

?>