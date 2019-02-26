<?php
/**
 * Custom filters plugin for Craft CMS 3.x
 *
 * Filters for twig
 *
 * @link      https://webroots.nl
 * @copyright Copyright (c) 2019 Arno Gregorian
 */

namespace webroots\customfilters\variables;

use webroots\customfilters\CustomFilters;

use Craft;

/**
 * Custom filters Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.customFilters }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Arno Gregorian
 * @package   CustomFilters
 * @since     1
 */
class CustomFiltersVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.customFilters.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.customFilters.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
