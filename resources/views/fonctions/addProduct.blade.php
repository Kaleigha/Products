<div class="container mx-auto">
    <div class="text-center">
        <h1 class="mb-3 mt-3 font-semibold text-xl text-gray-800">Ajout de produit</h1>
    </div>
    <div class="container-fluid pb-3 pt-3 mb-3 rounded border border-white shadow-lg" style="background: rgb(207,244,244);
background: linear-gradient(90deg, rgba(207,244,244,1) 7%, rgba(127,196,246,1) 85%, rgba(204,232,245,1) 100%);">
        <form method="post" action="{{route('addProductComfirm')}}">
            @csrf
            <div class="mb-3 d-flex flex-column ">
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
            <div class="d-grid d-md-flex justify-content-md-end">
                <button type="submit" class="btn  border border-white " style="background:#ffffff;">Enregistrer</button>
            </div>
        </form>
    </div>

</div>