


		<div class="slidercontainer" style="background: #315F97;">
			<div class="container">
				<div class="ico"><span class="fa fa-tv"></span></div>
				<div class="title">
					<h2><?php echo $title; ?></h2>
					<span><i class="fa fa-clock-o"></i> &nbsp; 10 minute read</span>
				</div>
			</div>
		</div>

		<div class="contentcontainer mt-5">
			<div class="container">
				<div class="col-md-12">
					<!-- lorem content -->
					<div>
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>					</div>
					<!-- end lorem content -->
				</div>
			</div>
		</div>




