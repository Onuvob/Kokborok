

<div class="row justify-content-center">

    <div class="col-md-10">

        <ol class="list-group">

            @foreach($words as $word)

                <li class="list-group-item bg-word-list d-flex justify-content-between align-items-center">
                    <a class="text-white" href="{{ route('words.show', [$word->id] ) }}">{{ $word->word }}</a>
                    <span class="badge badge-primary badge-pill">
                        <a href="#" class="btn text-white"><i class="far fa-bookmark"></i> Add</a>
                        <a href="#" class="btn text-white"><i class="fas fa-bookmark"></i></a>
                        <a href="#" class="btn text-white"><i class="far fa-edit"></i> Edit</a>
                    </span>
                </li>

            @endforeach

        </ol>

    </div>

</div>
