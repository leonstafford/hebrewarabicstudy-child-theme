<?php
/**
 * The Resource category template file
 *
 * @package HebrewArabicChildTheme
 */

get_header();

?>

<b>Resource meta</b>

<?php

$fields = get_fields();

if( $fields ): ?>
    <ul>
        <?php foreach( $fields as $name => $value ): ?>
            <li><b><?php echo $name; ?></b> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php

get_footer();

?>



