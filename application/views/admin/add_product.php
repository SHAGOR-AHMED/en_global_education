<?php
include('header.php');
?>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
	<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
		<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
			<div class="agile_top_w3_grids"> 
                       <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Add Product</div>
            </div>
              <?php
                $message=$this->session->userdata('message');
                if($message)
                {
                  print '<span style="color:green;font-size:16px;margin:10px;">'.$message.'</span>';
                  $this->session->unset_userdata('message');
                }
              ?>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="<?php echo base_url('product_save');?>" enctype="multipart/form-data" method="post">
                        <div class="control-group">
                          <label class="control-label" for="userfile">Name</label>
                          <div class="controls">
                            <input type="text" name="name" id="company" class="form-control" required>
                          </div>
                        </div>

                         <div class="form-group">
                          <label class="control-label" for="userfile">Product Category</label>
                          <div class="controls">
                            <select name="category" class="form-control">
                              <option value="">Select</option>          
                               <option value="1">LED Lights & Fixtures</option> 
                                <option value="2">CCTV Camera(Security Camera)</option>                             
                            </select>
                          </div>
                        </div>

                  

                      

                        <div class="control-group">
                          <label class="control-label" for="userfile">Product Description</label>
                          <div class="controls">
                            <!-- <input type="text" name="description" id="company" class="form-control" required> -->
                            <textarea name="description"></textarea>
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="userfile">Product Price</label>
                          <div class="controls">
                            <input type="text" name="price" id="company" class="form-control" required>
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="userfile">Upload image</label>
                          <div class="controls">
                            <input type="file" name="image" id="company" class="form-control" required>
                          </div>
                        </div>
                        <br>
                        <div class="form-actions">
                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                        <ul class="inline avatars" id="home_slider_images">
                          <!-- dynamic data comes here -->
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <!-- /block -->   
			</div>							
		</div><!-- //inner_content_w3_agile_info-->
	</div>

<?php
include('footer.php');
?>

<script type="text/javascript">

    $('#category').change(function () {
        $.get("<?php echo base_url()?>merchant_controller/getSubcatByCatId/" + this.value, function (data, status) {
            $('#subcat_name').html(data);
        });
        
    });
        
</script>