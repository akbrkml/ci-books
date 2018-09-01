<ol class="breadcrumb breadcrumb-bg-deep-purple">
    <li class="active">
        Books
    </li>
</ol>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Books
                </h2>
                <ul class="header-dropdown">
                    <a href="<?php echo base_url('books/tambahdata')?>" class="btn btn-primary waves-effect">+ Add new</a>
                </ul>
            </div>
           
            
            
            <div class="body">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                    <thead>
                        <tr>
                        
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date Published</th>
                            <th>Number of page</th>
                            <th>Type</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataBook as $r){?>
                        <tr>

                            <td>
                            <?php echo "$r->title";?>
                            </td>
                            <td>
                                <?php echo $r->author;?>
                            </td>
                            <td>
                                <?php echo $r->date_published;?>
                            </td>
                            <td>
                                <?php echo $r->number_page;?>
                            </td>
                            <td>
                                <?php echo $r->type;?>
                            </td>

                            <td class="centered">
                                <a class="btn btn-circle-sm btn-warning waves-effect" href="<?php echo base_url("books/ubahdata/$r->id")?>"><i class="material-icons">edit</i></a>

                                <button type="button" class="confirmation btn btn-circle-sm btn-danger waves-effect" tabel="Books" data-id="<?php echo $r->id;?>"><i class="material-icons">delete</i></button>
                            </td>

                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>