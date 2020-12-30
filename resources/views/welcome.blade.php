@extends('layouts.front')

@section('breadcrumb')
<section class="breadcrumb_area">
		<div class="container">
				<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
				</nav>
		</div>
</section>
@endsection

@section('content')
<div class="section_title pb-20">
		<h3 class="title">Editorial : point de vue de l'OMAP</h3>
</div>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>

<ul class="list">
		<li><i class="fa fa-check"></i> Powerful feature one.</li>
		<li><i class="fa fa-check"></i> Much needed and important feature two.</li>
		<li><i class="fa fa-check"></i> Essential features to rock.</li>
</ul>
<a href="#" class="main-btn">Read More</a>
@endsection
