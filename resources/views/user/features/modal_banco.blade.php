<div class="modal fade" id="exampleBanco{{$filiado->id}}" tabindex="-1" role="dialog"
  aria-labelledby="exampleContatoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleContatoLabel">Informações Bancárias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="font-weight-bold pb-3 text-left modal-title" id="exampleContatoLabel">{{$filiado->destinatario->nome}}</h1>
        <div>
          <p>Conta Digital PicPay: <b>{{$filiado->destinatario->picpay}}</b></p>
        </div>
        @foreach ($filiado->destinatario->dados_banco as $banco)
        <div class="row overflow-scroll">
            <div class="col-md-6">
                  <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Titular da conta: <span class="ml-auto font-weight-bold">{{$banco->nome_completo}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            CPF: <span class="ml-auto font-weight-bold">{{$banco->cpf}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Banco: <span class="ml-auto font-weight-bold">{{$banco->banco}}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Agencia: <span class="ml-auto font-weight-bold">{{$banco->agencia}}</span>
                          </li>
                        </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Conta: <span class="ml-auto font-weight-bold">{{$banco->conta}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Operação: <span class="ml-auto font-weight-bold">{{$banco->operacao}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tipo de Conta: <span class="ml-auto font-weight-bold">{{$banco->tipo_conta}}</span>
                  </li>
                </ul>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>
  
      
        @endforeach
      </div>
    </div>
  </div>
</div>