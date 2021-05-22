<x-master-layout>
<div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-4 mb-4">
                <h1>
                    Nos derniers produits !
                </h1>
            </div>
            @foreach ($products as $produit)
                <div class="col-md-4">
                    <div class="card text-center">
                    <img width="200" class="card-img-top" 
                        src="{{ $produit->image ? asset('storage/uploads/produits/'.$produit->image) : 'https://picsum.photos/150/150' }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $produit->designation }}</h4>
                        <p class="card-text">{{ $produit->description}}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-master-layout>
