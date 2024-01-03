<h1>{{$heading}}</h1>

@unless (count($jobs) == 0)

@foreach ($jobs as $job)

<h1>
    <a href="/jobs/{{$job['id']}}">{{$job['title']}}</a>
</h1>
<p>
    {{$job['description']}}
</p>

@endforeach

@else
<p>No jobs found</p>

@endunless