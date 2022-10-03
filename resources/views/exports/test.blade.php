<!DOCTYPE html>
<html>

<head>
	<title>Customer Ratings</title>
</head>

<body>


	<div class="definition">


		<div class="row">
			<ol type="1">
				<div class="col-md-12">
					<h4>Customer Ratings</h4>
					<li>Rate your experience using the website/Do you feel that the website is user friendly?</li>
					{!!$friendly!!}
					<li>What was your purpose of visiting the website?</li>
					{!!$purpose!!}
					<li>Was the information/ content helpful to your search?</li>
					{!!$helpful!!}
					<li>On a scale of 1-10 how helpful was the content on the website in answering your questions?</li>
					{!!$how_helpful!!}

					<li>Were you sufficiently able to achieve your purpose for visiting the website?</li>
					{!!$purpose_achieved!!}
					<li>What was your biggest challenge in navigating the website?</li>
					<?php $i = 0; ?>
					@foreach($website as $web)
					<?php $i++; ?>
					<ul>
						<!-- only show if not null -->
						@if($web->biggest_challenge != null)
						<li>{{$web->biggest_challenge}}</li>
						@endif
					</ul>

					@endforeach
					<li>How can we improve your experience on the website?</li>
					<?php $i = 0; ?>
					@foreach($website as $web)
					<?php $i++;
					?>

					<ul>
						<!-- only show if it is not null -->
						@if($web->improve_experience != null)

						<li>{{$web->improve_experience}}</li>
						@endif
					</ul>

					@endforeach
				</div>
			</ol>
		</div>
		<div class="row">
			<ol type="1">
				<div class="col-md-12">

					<h4>Cancer Center Customer Satisfaction</h4>
					<li>During your visit, did you feel that you were treated with courtesy and respect?</li>
					{!!$treatment!!}
					<li>Do you feel that the staff listened carefully and paid attention to your needs?</li>
					{!!$attention!!}
					<li> How long did you wait to receive the service?/ Do you feel that the response time was adequate?</li>
					{!!$response!!}
					<li>Were the staff able to explain things to you in a way that was easy for you to understand?</li>
					{!!$easy!!}
					<li> To what extent do the facilities/infrastructure of the cancer centre accommodate your needs?</li>
					{!!$need!!}
					<li> Are you satisfied with the service you received?</li>
					{!!$satisfied!!}
					<li>How can the cancer centre improve service delivery?</li>
					<?php $i = 0; ?>
					@foreach($centers as $web)
					<?php $i++; ?>
					<ul>
						@if($web->improvement != null)
						<li>{{$web->improvement}}</li>
						@endif
					</ul>

					@endforeach
				</div>
			</ol>
		</div>

	</div>

</body>

</html>