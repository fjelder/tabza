@extends('layouts.app') @section('title', 'Lista stacji') @section('card_title', 'Stacja ::: '.$station->name ) @section('content')

<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title d-inline">Stacja_{{ $station->name }}</h5>
			<h6 class="card-subtitle mb-2 text-muted d-inline">
				<a href="{{route('stations.edit', $station->id)}}">#Edytuj szczegóły stacji</a>
			</h6>
		</div>

		<div class="card-body">
			<table class="table table-hover">
				<tr>
					<th scope="col">Linia kolejowa</th>
					<td colspan="2">
						@isset($station->lks)
						<ul>
							@foreach($station->lks as $lk)
							<li>nr {{$lk->number}} {{$lk->nameA}} - {{$lk->nameB}}</li>
							@endforeach
						</ul>
						@endisset
					</td>
				</tr>

				<tr>
					<th>Zakład linii kolejowych</th>
					<td colspan="2">
						<p>{{ Str::replaceFirst('Zakład Linii Kolejowych', '', $station->izs->name) }}</p>
					</td>
				</tr>

				<tr>
					<th>Zwrotnice</th>
<!-- 					<td>
						@isset($railroads)
						<ul>
							@foreach($railroads as $railroad)
							<li>{{$railroad->name}}</li>
							@endforeach
						</ul>
						@endisset
					</td> -->
					<td>
						@isset($railroads)
							<table class="table">
									<tr>
										
										<td>
										<ul>
											@foreach($railroads as $railroad)
											<li>{{$railroad->name}}</li>
											@endforeach
										</ul>
										
										</td>
										
										</tr>
								
								</table>
						@endisset
					</td>
					<td><a href="{{ route('railroad.index', $station->id) }}" class="">Edytuj</a></td>
				</tr>

				<tr>
					<th>Odcinki izolowane</th>
					<td>
						<p>torowe:</p>
						<p>zwrotnicowe:</p>
					</td>
					<td><a href="{{ route('railroad.index', $station->id) }}" class="">Edytuj</a></td>
				</tr>

				<tr>
					<th>Wykaz przebiegów</th>
					<td>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem deleniti totam unde laborum. Dolorem commodi autem hic rerum fugit, soluta quo doloribus, ipsum deleniti ullam vero mollitia quaerat nobis vitae quam officiis in. A aspernatur beatae, ex labore molestiae officia dolor magni dignissimos soluta illo veniam, enim obcaecati odit. Tenetur rerum qui excepturi iure, neque ad impedit itaque consequuntur. Soluta delectus magni tenetur, dolore, vero sit recusandae voluptate consequuntur deserunt temporibus minima, hic exercitationem debitis ipsa impedit distinctio reiciendis omnis ab nobis. Dolores, doloremque assumenda perferendis. Consectetur in perspiciatis tenetur aperiam alias eveniet quisquam reprehenderit perferendis officia iste doloribus distinctio ex iusto quasi, tempora consequuntur voluptatibus vitae incidunt sint quod dolore exercitationem! Ut laboriosam in dicta, nobis atque odio sint sapiente eum, blanditiis possimus pariatur iste animi nihil rerum laborum ad ratione optio eaque omnis sequi rem repudiandae. Incidunt rerum est animi quae id veritatis perferendis debitis quis possimus aspernatur.</p>
					</td>
					<td><a href="{{ route('railroad.index', $station->id) }}" class="">Edytuj</a></td>
				</tr>
			</table>
		</div>

		<div class="card-footer text-right">
			Utw. {{ $station->created_at->format('d.m.Y') }} # Akt. {{ $station->updated_at->format('d.m.Y') }}


		</div>


	</div>


</div>



</div>



@endsection