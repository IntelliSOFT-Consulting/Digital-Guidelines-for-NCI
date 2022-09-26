<!DOCTYPE html>
<html>

<head>
	<title>Customer Ratings</title>
</head>

<body>

	<h3>Customer Ratings</h3>
	<div class="definition">

		<ol type="1">
			<div class="row">
				<div class="col-md-12">
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

			</div>
		</ol>
	</div>

</body>

</html>