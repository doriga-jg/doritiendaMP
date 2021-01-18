<?php include('includes/header.php') ?>


    <section class="d-flex justify-content-center pt-3" style="background-color: #eee;">
        <div class="d-flex flex-column w-75 h-auto pr-4 pl-4 pt-3 pb-3 border rounded" style="background-color: white;">
            <h2>ESTOS SON LOS PRODUCTOS DE MERCADO PAGO</h2>
            <h5 class="d-flex align-self-center pt-4 pb-2">Compra aquí mismo gracias a las opciones que MercadoPago tiene para ti</h5>
            <p class="d-flex align-self-center w-75">
                Quisque sed mollis odio. Nulla feugiat malesuada magna, hendrerit placerat mauris semper sit amet. Aliquam erat volutpat. Sed suscipit dignissim est sed fermentum. Nulla facilisi. Phasellus maximus nibh eget mauris dictum, vestibulum tincidunt tellus egestas. Curabitur non augue ac neque porttitor maximus. Nulla lectus ante, dignissim sit amet cursus eu, consectetur eget leo. Aliquam a lorem id dui condimentum pulvinar. Nulla facilisi. Aenean hendrerit nunc non nulla luctus luctus. 
            </p>
        </div>
    </section>

    <section class="d-flex flex-column pt-3 pb-4" style="background-color: #eee;">
        <div class="d-flex flex-column align-self-center justify-content-center w-75 h-auto pr-4 pl-4 pt-3 pb-5 border rounded" style="background-color: white;">
            <p class="font-weight-bold w-auto">Mostrando todos los productos (6)</p>
            <div class="d-flex w-auto pt-4"><?php for ($i=1; $i<=4; $i++) { ?>
                <div class="d-flex flex-column shadow border border-secondary pl-3 pr-3 pb-3 mr-4" style="border-radius: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="120" fill="currentColor" class="d-flex align-self-center bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                        <path d="M10.564 8.27L14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
                    </svg>
                    <p class="mb-0" style="font-size: 10px">Marca del producto</p>
                    <p class="mb-0">Nombre del producto</p>
                    <p>$390</p>
                    <a href="#">
                        <button class="btn btn-outline-dark" style="border-radius: 20px; height: 40px; width: 180px">
                            Añadir al carrito
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            <?php } ?>
            </div>
            <div class="d-flex w-auto pt-4"><?php for ($i=1; $i<=2; $i++) { ?>
                <div class="d-flex flex-column shadow border border-secondary pl-3 pr-3 pb-3 mr-4" style="border-radius: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="120" fill="currentColor" class="d-flex align-self-center bi bi-file-earmark-image-fill" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                        <path d="M10.564 8.27L14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
                    </svg>
                    <p class="mb-0" style="font-size: 10px">Marca del producto</p>
                    <p class="mb-0">Nombre del producto</p>
                    <p>$390</p>
                    <a href="#">
                        <button class="btn btn-outline-dark" style="border-radius: 20px; height: 40px; width: 180px">
                            Añadir al carrito
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button id="myBtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-self-center mt-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
            <div class="d-flex justify-content-center rounded-circle bg-dark" style="height: 25px; width: 25px;"><p class="text-white">1</p></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle-fill ml-2" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg>
        </div>
    </section>

<?php include('includes/footer.php') ?>