  <div id="modal-delete" class="modal">
    <div class="modal-content">
      <h4>Eliminar Producto</h4>
      <h5>Desea eliminar el producto?</h5>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn green">Cancelar</a>
        <a href="{{ route('products.destroy', $product->id) }}" class="btn red">Eliminar </a>      
    </div>
  </div>
  