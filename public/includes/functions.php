<?php

function project_image($name, $alt, $classes="") {

	$re = '/
		%                   # Start tag
		wf_product_img      # Tag name
		\(                  # Start parentheses
			"(.*?)"             # Find image name argument
			,\s+?               # Argument separator
			"(.*?)"             # Find alt text in quotes
			(?:                 # Start optional argument
				,\s+?               # Argument separator
				"(.*?)"             # Find style in quotes
			)?                  # End optional argument
		\)                  # End parentheses
		%                   # End tag
	/x';

	$tag = <<<EOT
<img class="img--fluid $classes"
	src="/assets/img/projects/$name-xs.png"
	srcset="/assets/img/projects/$name-xs.png 230w,
			/assets/img/projects/$name-sm.png 520w"
	sizes="(min-width: 550px) 230px,
			520px"
	width="520" height="520" alt="$alt">
EOT;

	echo $tag;
	$content = preg_replace($re, $tag, $content);

	echo($content);
}