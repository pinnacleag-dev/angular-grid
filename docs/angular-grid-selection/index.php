<?php
$key = "Selection";
$pageTitle = "AngularJS Angular Grid Selection";
$pageDescription = "AngularJS Angular Grid Selection";
$pageKeyboards = "AngularJS Angular Grid Selection";
include '../documentation_header.php';
?>

<div>

    <h2>Selection</h2>

    <p>
        Selection can be either single row selection or multiple row selection.
    </p>

    <p>
        All the currently selected rows are stored in an array on the grid options named selectedRows.
    </p>

    <h3>Single Row Selection</h3>

    <p>
        The example below shows single row selection.
    </p>

    <show-example example="example1" example-height="450px"></show-example>

    <h3>Multiple Row Selection</h3>

    <p>
        The example below shows multi-row selection.
    </p>

    <show-example example="example2" example-height="450px"></show-example>

    <h3>Checkbox Selection</h3>

    <p>
        Checkbox selection can be used in two places: a) row selection and b) group selection.
    </p>

    <p>
        To enable checkbox selection for a row, set the attribute 'checkboxSelection' to true
        on one of the column definitions.
    </p>

    <p>
        To enable checkbox selection for groups, set the attribute 'groupCheckboxSelection' to
        one of 'group' or 'children'. When set to <b>group</b>, then selecting the group will
        select the group node. When set to <b>children</b>, then selecting the group will
        either select or deselect all of the children.
    </p>

    <p>
        The example below shows checkbox selection with groups. Selecting the group has the
        effect of selecting the children. Likewise selecting all the children automatically
        selects the group. The group itself will never appear in the <i>selectedRows</i>
        list.
    </p>

    <show-example example="groupSelection" example-height="450px"></show-example>

    <p>
        If you select 'group' for the 'groupCheckboxSelection', then the group will be selectable
        as it's own entity.
    </p>

    <h3>Selection Callbacks</h3>

    <p>
        There are two callbacks with regards selection:<br/>
        rowSelected(row): Gets called when a row is selected and passes the selected row.<br/>
        selectionChanged(): Gets called when a row is selected or deselected.<br/>
    </p>

    <show-example example="example3" example-height="450px"></show-example>

</div>

<?php include '../documentation_footer.php';?>
