<?php
// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();

?>
<?php 
// Add Javascript directly here

?>
<?php foreach($this->property as $i => $row): ?>
  <div class="modal-header">
    <h3>Contact Details for:</h3>
	<small> <?php echo $row['title'] ?> </small>
  </div>
  <div class="modal-body">
    <p><strong>Contact Details:</strong> </p>
    	<table class="table table-hover">
            <tr>
                <td class="span5">Name: </td>
                <td class="span7"> <?php echo $row['cont_name'] ?> </td>
            </tr>
            <tr>
                <td class="span5">Contact Number: </td>
                <td class="span7"> <?php echo $row['contact'] ?> </td>
            </tr>
            <tr>
                <td class="span5">Email ID: </td>
                <td class="span7"> <?php echo $row['email'] ?> </td>
            </tr>
            <tr>
                <td class="span5">Contact Address: </td>
                <td class="span7"> <?php echo $row['cont_address'] ?> </td>
            </tr>
        </table>
  </div>


<?php endforeach; ?>
