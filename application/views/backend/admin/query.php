<div class="row">
    <div class="col-sm-12">
		<div class="panel  panel-inverse ">
            <div class="panel-heading"> <?php echo get_phrase('Post');?>
            
          
            </div>
                <div class="panel-body table-responsive">


         <table id="example23" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo get_phrase ('Name');?></th>
                    <th><?php echo get_phrase ('Email');?></th>
                    <th><?php echo get_phrase ('Query');?></th>

                </tr>
             </thead>

             <tbody>
    <?php foreach ($query as $key => $row):?>
             <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['query'];?></td>
            </tr>
    <?php endforeach;?>

            </tbody>
        </table>



                </div>
        </div>
    </div>
</div>