<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
function generate_sidemenu()
{
	return 
	'<li>
		<a href="'.site_url('dashboard').'"><i class="material-icons">dashboard</i><p>Dashboard</p></a>
	</li>
	<li>
		<a href="'.site_url('perbaikan').'"><i class="material-icons">build</i><p>Jasa</p></a>
	</li>
	<li>
		<a href="'.site_url('customer').'"><i class="material-icons">people</i><p>Customer</p></a>
	</li>
	<li>
		<a href="'.site_url('pengerjaan').'"><i class="material-icons">directions car</i><p>Pengerjaan</p></a>
	</li>';
}
function generate_customer_sidemenu()
{
	return 
	'<li>
		<a href="'.site_url('pengerjaan_customer').'"><i class="material-icons">directions car</i><p>Pengerjaan</p></a>
	</li>';
}
