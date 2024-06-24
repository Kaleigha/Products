<div class="container mx-auto">
    <div class="text-center">
        <h1>Ajout de produit</h1>
    </div>
    <div class="container-fluid pb-3 pt-3 mb-3 rounded border border-white shadow-lg" style="background: rgb(216,231,231);
background: linear-gradient(90deg, rgba(216,231,231,1) 0%, rgba(61,163,236,1) 32%, rgba(204,232,245,1) 100%);">
        <form method="post" action="{{route('addProductComfirm')}}">
            @csrf
            <div class="mb-3 ">
                <label for="name" class="form-label ">Nom</label>
                <input type="text" name="name" class="form-control " id="name" aria-describedby="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" required>
            </div>
            <div class="mb-3 ">
                <label for="price" class="form-label">Prix</label>
                <input type="text" name="price" class="form-control" id="price" required>
            </div>
            <button type="submit" class="btn btn-dark border border-white">Enregistrer</button>
        </form>
    </div>

</div>