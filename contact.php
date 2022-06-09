
	<?php include 'header2.php' ?>
   <!-- contact us -->

	<style>
		.svg-footer{
			background-color:white !important;
		}
	</style>
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#151930" 
	fill-opacity="1" d="M0,64L24,96C48,128,96,192,144,181.3C192,171,240,85,288,90.7C336,96,384
	,192,432,202.7C480,213,528,139,576,96C624,53,672,43,720,74.7C768,107,816,181,864,229.3C912,
	277,960,299,1008,288C1056,277,1104,235,1152,202.7C1200,171,1248,149,1296,122.7C1344,96,1392,
	64,1416,48L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,
	0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,
	0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

    <div class="jumbotron-fluid contact">
			<div class="container">
				<h5>SAY HELLO</h5>
				<h2>We'd Love To Hear From You. Let's Get In Touch</h2>
				<div class="row mt-5">
					<div class="col-md-6">
					<div class="alert alert-warning alert-dismissible fade show my-alert d-none" role="alert">
						<strong>ThankYou!</strong>We have received your message. 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
						<form name="kirim-ke-sheet"> 
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control form"  placeholder="Name" name="name">
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control form"  placeholder="Email" name="email">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control form"  placeholder="Phone Number" name="phone">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control form"  placeholder="Your Company" name="company">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="text" class="form-control form"  placeholder="Fill Message" name="message">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn-learn btn-kirim">Send</button>
									
									<button class="btn-learn d-none btn-loading" type="button" disabled>
									<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Loading...
									</button>
								</div>
								
							</div>
						</form>
					</div>
					<div class="col-md-6 box-kanan">
						<div class="row">
							<div class="col-md-12">
								<h5>OFFICE</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>Jl. Danau Sunter Utara B1B No.13, RT.1/RW.10, Sunter Utara, Tj. Priok, Jakarta, Daerah Khusus Ibukota Jakarta 14350
								</p>
							</div>
							<div class="col-md-6">
								T.+6286123123<br>
								F.+6289612312<br>
								E.info@cdcgi.com
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- akhir contact us -->

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzuIa23bOS6FI-4q_CADw1sP_UyPjvMOFEJ1lAUMxySVuX5Ho3S-k_HFVS1DvHGZncf0g/exec'
  const form = document.forms['kirim-ke-sheet']
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const alert = document.querySelector('.my-alert');

  form.addEventListener('submit', e => {
    e.preventDefault()
	//jika tombom submit di klik
	//hilangkan tombol kirim, munculkan tombol loading
	btnLoading.classList.toggle('d-none');
	btnKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
		  //hilangkan tombol kirim, munculkan tombol loading
		  btnLoading.classList.toggle('d-none');
		  btnKirim.classList.toggle('d-none');

		  alert.classList.toggle('d-none');

		  form.reset();
		  console.log('Success!', response)
	  
	  
	  })
      .catch(error => console.error('Error!', error.message))
  })
</script>
<?php include 'footer.php'; ?>