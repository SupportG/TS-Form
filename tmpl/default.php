<?php
/**
 * @copyright	Copyright (c) 2014 TS Form. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul>
<?php
foreach ($list as $item) {
    echo '<li>'.$item->title.'</li>';
}
?>
</ul>
