
<div>

    <div class="text-right mb-2">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#wordEditModal">
            <i class="far fa-edit"></i> Edit Word
        </button>
    </div>

    <div class="jumbotron bg-custom">

        <h1 class="display-4 text-white">{{ $word->word }}</h1>
        <mark>Description:</mark> <p class="lead text-white">{{ $word->description }}</p>

        <div class="text-center">
            <img width="200" height="200" src="https://images.pexels.com/photos/2291591/pexels-photo-2291591.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="rounded" alt="...">
        </div>

        <hr class="my-4">

        <div class="row">

            <div class="col text-center">
                <h3 class="border-radius">Fatung</h3> <br>
                <p class="border-radius-word"> <q>{{ $word->fatung }}</q></p>
            </div>

            <div class="col text-center">
                <h3 class="border-radius">Khali</h3> <br>
                <p class="border-radius-word"> <q>{{ $word->khali }}</q></p>
            </div>

            <div class="col text-center">
                <h3 class="border-radius">Tungbai</h3> <br>
                <p class="border-radius-word"> <q>{{ $word->tungbai }}</q></p>
            </div>

            <div class="col text-center">
                <h3 class="border-radius">Naitung</h3> <br>
                <p class="border-radius-word"> <q>{{ $word->naitung }}</q></p>
            </div>

            <div class="col text-center">
                <h3 class="border-radius">Dendak</h3> <br>
                <p class="border-radius-word"> <q>{{ $word->dendak }}</q></p>
            </div>

            <div class="col text-center">
                <h3 class="border-radius">Kaibing</h3> <br>
                <p class="border-radius-word"> <q>{{ $word->kaibing }}</q></p>
            </div>
        </div>

    </div>

</div>


@include('layouts.word-layouts.edit-word-modal')
