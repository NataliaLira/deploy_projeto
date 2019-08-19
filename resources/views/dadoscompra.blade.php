@extends('layoutsloja.app')

@section('content')
  
  <div class="site-wrap">
    

  <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
                    <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
                    <a href="/carrinho">Carrinho</a><span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Dados da Compra</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 mb-5 mt-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Dados de compra</h2>
            <div class="p-3 p-lg-5 border">
              
              <div class="form-group row">
                <div class="col-6">
                  <label for="c_fname" class="text-black">Primeiro Nome<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Último Nome<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-12">
                  <label for="c_companyname" class="text-black">CEP</label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-12">
                  <label for="c_address" class="text-black">Endereço<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Endereço da rua">
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Número">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Complemento">
              </div>

              <div class="form-group row">
                <div class="col-6">
                  <label for="c_state_country" class="text-black">Estado<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-6">
                  <label for="c_postal_zip" class="text-black">Cidade<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-6">
                  <label for="c_email_address" class="text-black">Endereço de email<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-6">
                  <label for="c_phone" class="text-black">Telefone/Celular<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Número do telefone/celular">
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            
            
            <div class="row mb-5">
              <div class="col-12 mt-5">
                <h2 class="h3 mb-3 text-black">Detalhes do pedido</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Produtos</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nome do produto <strong class="mx-2">x</strong>1</td>
                        <td>Preço</td>
                      </tr>
                      <tr>
                        <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
                        <td>$100.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                        <td class="text-black">$350.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Forma de pagamento 1</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Informações</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Forma de pagamento 2</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Informações</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Forma de pagamento 3</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Informações</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='/finalizada'">FINALIZAR COMPRA</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

    @endsection
    