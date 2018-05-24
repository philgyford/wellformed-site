<?php

/**
 * Well-Formed Functions plugin
 *
 * Some custom things.
 *
 * @author  Phil Gyford
 * @link    http://picocms.org
 * @license http://opensource.org/licenses/MIT The MIT License
 * @version 1.0
 */
final class WFFunctions extends AbstractPicoPlugin
{

    /**
     * Generate an image tag with different srcset images.
     *
     * Use *within HTML tags* like:
     *   %wf_product_img("file-name", "My alt text")%
     *
     * This would use images titled 'file-name-xs.png' and 'file-name-sm.png'
     * within 'assets/img/projects/'.
     *
     * (If not used within HTML tags, the quotes used are changed into &quot;
     * so the grep doesn't find them.)
     *
     * Triggered after Pico has parsed the contents of the file to serve
     *
     * @see    Pico::getFileContent()
     * @param  string &$content parsed contents
     * @return void
     */
    public function onContentParsed(&$content)
    {
        $re = '/
            %                   # Start tag
            wf_product_img      # Tag name
            \(                  # Start parentheses
            "(.*?)"             # Find image name argument
            ,\s+?               # Argument separator
            "(.*?)"             # Find alt text in quotes
            \)                  # End parentheses
            %                   # End tag
        /x';

        $tag = <<<EOT
<img class="img--fluid img--bordered"
    src="/assets/img/projects/$1-xs.png"
    srcset="assets/img/projects/$1-xs.png 230w,
            assets/img/projects/$1-sm.png 520w"
    sizes="(min-width: 550px) 230px,
            520px"
    width="520" height="520" alt="$2">
EOT;

        $content = preg_replace($re, $tag, $content);
    }

}
