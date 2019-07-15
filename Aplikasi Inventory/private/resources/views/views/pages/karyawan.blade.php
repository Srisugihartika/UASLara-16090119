
<p>Nama : {{ $nama }}</p>

<p>Mengikuti Mata Kuliah </p>

<ul>
        @foreach ($matkul as $m)
            <li>{{ $m }}</li>
        @endforeach
</ul>
