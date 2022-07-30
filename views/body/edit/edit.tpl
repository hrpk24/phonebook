<html>
{extends file='../../master.tpl'}
{block name="title" append}
Edit Contact
{/block}
{block name="cotentn"}

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Contact</h1>
    </div>
</div>
<!-- /.row -->

<!-- ====================== -->
<div class="row">
    <div class="col-lg-6">
    </div>
    <div class="col-lg-12">
        <div style="text-align:center; margin-bottom:10px;">
            <img src="img/google.png" width="200px" height="180px">
            <br>
            <p>Change Profile</p>
            <br>

            <center><input type="file" name="profileavatar"></center>
        </div>
        <br>
        <div class="panel panel-warning">
            <div class="panel-heading">
                Edit
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-12">
                        {foreach from=$result item=p}
                        <fieldset>
                            <form role="form" action="change.php?editid={$p.id}" method="post" id="textViewCount">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" class="form-control" pattern="[a-zA-Z]+"
                                        value="{$p.fname}" required>
                                    <br>

                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" value="{$p.lname}"
                                        pattern="[a-zA-Z]+">
                                    <br>

                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{$p.email}" required>
                                    <br>



                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="Mr">Man </option>
                                        <option value="Miss"> Woman</option>
                                    </select>

                                    {* <?php
                                                            } else {
                                                            
                                                            <label>Gender</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="Miss"> Woman</option>
                                                                    <option value="Mr">Man </option>
                                                                </select>
                                                            <?php
                                                            }
                                                            *}

                                                            <br>


                                                            <div class="form-group">

                                                                <label>Phone</label>
                                                                <input type="tel" name="Phonenumber" class="form-control" maxlength="11" value="{$p.phone}" pattern="09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4})" required>
                                                                <br>

                                                                <label>Location</label>
                                                                <input type="text" name="location" id="location" class="form-control" value="{$p.location}">
                                                                <br>

                                                                <label>Cell</label>
                                                                <input type="text" name="cell" id="cell" class="form-control" value="{$p.cell}">
                                                                <br>

                                                                <label>Country</label>
                                                                <input type="text" name="country" id="country" class="form-control" value="{$p.country}">
                                                                <br>
                                                            </div>

                                                            <input type="submit" name="edit" class="btn btn-warning btn-lg styless btn-block" value="Submit">
                                                    </form>
                                                    <script src="js/update.js"></script>

                {/foreach}





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>

                {/block}