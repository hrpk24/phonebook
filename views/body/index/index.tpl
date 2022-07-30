<html>
{extends file='../../master.tpl'} 
{block name="title" append}
Home
{/block}
{block name="cotentn"}

   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contacts</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Contacts List
                        </div>
                        <form>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <!-- <th>gender</th> -->
                                                <th hidden>id</th>
                                                <th>Avatar</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Cell</th>
                                                <th>Country</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>

                                            {foreach from=$result item=p}
                                            <tr>
                                                <!-- <th>gender</th> -->
                                                <td>Avatar</td>
                                                <td>{$p.gender}. {$p.fname}  {$p.lname}</td>
                                                <td>{$p.phone}</td>
                                                <td>{$p.email}</td>
                                                <td>{$p.location}</td>
                                                <td>{$p.cell}</td>
                                                <td>{$p.country}</td>
                                                <td><button type="button" class="btn btn-warning" neme="update"
                                                        onclick="location.href='edit.php?editid={$p.id}'">edit</button>
                                                </td>
                                                <td><button type="button" class="btn btn-danger" name="del"
                                                        onclick="location.href='delete.php?delid={$p.id}'">delete</button>
                                                </td>

                                            </tr>
                                            {/foreach}

                                        </thead>
                                        <tbody id="tBody"></tbody>
                                    </table>
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {/block}