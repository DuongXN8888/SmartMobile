<?php echo form_open( base_url()."lien-he"); ?>
<section>
	<div class="container">
		<div class="col-md-7 col-12">
			<div class="section-article contactpage" style="  padding-left: 20px;">
				<?php 
				echo validation_errors();
				
				?>
				<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
					<h1 style="color: black">Thông Tin Công Ty Smart Mobile</h1>				
					<h4>Công ty Smart Mobile – doanh nghiệp bán lẻ các thiết bị di động, điện máy hàng hóa hàng đầu Việt Nam. Tuy nhiên, sự thành công này trải qua không ít khó khăn, thăng trầm. Vậy cùng tìm hiểu về lịch sử hình thành và phát triển trở thành doanh nghiệp tỷ đô của Thế Giới Di Động qua bài viết dưới đây nhé!</h4>
					<h4> Smart Mobile có tên đầy đủ là Công ty cổ phần Smart Mobile được thành lập vào tháng 10 năm 2021. Tên tiếng Anh của Công ty là Smart Mobile J&P, mã chứng khoán: JWP. Đây là một tập đoàn bán lẻ tại Việt Nam, lĩnh vực kinh doanh chính là điện thoại di động, thiết bị số, điện tử tiêu dùng.
					</h4>

					<img src="./anh1.jpg" width="100%">
					<h1 style="color:black;">Ý Nghĩa LoGo Của Smart Mobile Là Gì?</h1>
					<img src="./smart-mobi2.png">
					<h4>Hình tượng hình vuông cùng tên công ty trong logo chính thức của Công ty cổ phần Smart Mobile được tạo vô cùng tỷ mĩ. Hình ảnh này tượng trưng cho hệ thống rất nhiều các cửa hàng bán lẻ của hãng.</h4>
				<div class="form-comment">
						<div class="row" style="padding-left: 14px;">
							<div class="form-group">
							<label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
							<textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
						</div>
						<div class="form-group">
							<label for="message"><em> Nội Dung</em><span class="required">*</span></label>
							<textarea id="message" name="content" class="form-control custom-control" rows="5"></textarea>
						</div>
						<button type="submit" class="btn-update-order" >Gửi Bình Luận</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="f-contact" style="
			padding-left: 32px;
			">
			<h1 style="color: black">Sứ Mệnh Và Tầm Nhìn</h1>
			<h2 style="color:blue;">Tuyên Bố Sứ Mệnh Của Smart Mobile</h2>
			<h4>Thật không may, sáng tạo như Smart Mobile có thể là một thương hiệu, công ty đã thấy một số lời chỉ trích trong những ngày qua. Một trong những thay đổi ít hấp dẫn hơn mà thương hiệu đã thực hiện, là tuyên bố sứ mệnh của nó, giờ đây trở nên cồng kềnh hơn, và ít sâu sắc hơn. Nó đọc giống như một danh sách những điều mà Smart Mobile có thể làm, hơn là một định nghĩa chung về công ty.</h4>
			<h2 style="color:blue">Tầm Nhìn Của Smart Mobile</h2>
			<h4>Đưa Thương Hiệu Smart Mobile Trở Thành một trong những thương hiệu bán lẻ hàng đầu Việt Nam</h4>
			
		</div>

	</div>
	
</div>

</section>