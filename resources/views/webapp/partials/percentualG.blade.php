<div class="row">
            <div class="col-12">
              <div class="c-table-responsive@wide">
                <table class="c-table">
                  <thead class="c-table__head">
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Nome da Cidade</th>
                      <th class="c-table__cell c-table__cell--head">Ranking</th>
                      <th class="c-table__cell c-table__cell--head">Casos Confirmados</th>
                      <th class="c-table__cell c-table__cell--head">População Estimada</th>
                      <th class="c-table__cell c-table__cell--head">Porcentagem</th>
                      <th class="c-table__cell c-table__cell--head">Ações</th>
                    </tr>
                  </thead>

                  <tbody>
                  @foreach($percentuaisG as $pp)
                    <tr class="c-table__row">
                      <td class="c-table__cell">
                        <div class="o-media">
                          
                          <div class="o-media__body">
                            <h6>@if(isset($pp->cidade)){{$pp->cidade}} @else Cidade não informada @endif</h6>
                            <p>{{$pp->UF}}</p>
                          </div>
                        </div>
                      </td>
                      <td class="c-table__cell">{{ $loop->index }}</td>
                      <th class="c-table__cell">{{$pp->casos_total}}</th>
                      <td class="c-table__cell">{{$pp->populacao}}</td>
                      <td class="c-table__cell">{{$pp->porcentagem}}%</td>
                      <td class="c-table__cell">
                        <div class="c-dropdown dropdown">
                          <a href="#" class="c-btn c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ENVIAR REQUISIÇÃO DE POST <i class="feather icon-chevron-down"></i>
                          </a>

                          <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" style="width:200px;" aria-labelledby="dropdownMenuTable1">
                            <a class="c-dropdown__item dropdown-item" href="#" data-toggle="modal" data-target="#modal{{$pp->id}}">POST api interna</a>
                            <a class="c-dropdown__item dropdown-item" href="#" data-toggle="modal" data-target="#modal{{$pp->id}}b">POST api externa - Enviado</a>
                           </div>
                        </div>
                      </td>
                    </tr>
  <!-- Modal -->
  <div class="c-modal modal fade" id="modal{{$pp->id}}" tabindex="-1" role="dialog" aria-labelledby="modal{{$pp->id}}">
                    <div class="c-modal__dialog modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                                <h3>Enviar Post - Simulação API Externa</h3>
                                <h4>@if(isset($pp->cidade)){{$pp->cidade}} @else Cidade não informada @endif - {{$pp->UF}} </h4>
                                <p class="u-text-mute u-mb-small">Você está prestes a popular um endpoint interno do servidor. Verifique abaixo os dados que serão enviados.</p>
                               <p><b>Ranking</b>:{{$loop->index}} - * 0 equivale a maior número de casos</p>
                               <p><b>Nome da Cidade</b>:@if(isset($pp->cidade)){{$pp->cidade}} @else Cidade não informada @endif</p>
                               <p><b>Percentual de casos</b>:{{$pp->porcentagem}}</p>
                               <p></p><br/>
                                <button class="c-btn c-btn--info" data-dismiss="modal">
                                    Ok, enviar um post para endpoint
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-modal modal fade" id="modal{{$pp->id}}b" tabindex="-1" role="dialog" aria-labelledby="modal{{$pp->id}}b">
                    <div class="c-modal__dialog modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                                <h3>Enviar Post - Para API Externa</h3>
                                <h4>@if(isset($pp->cidade)){{$pp->cidade}} @else Cidade não informada @endif - {{$pp->UF}} </h4>
                                <p class="u-text-mute u-mb-small">Você está prestes a popular um endpoint interno do servidor. Verifique abaixo os dados que serão enviados.</p>
                               <p><b>Ranking</b>:{{$loop->index}} - * 0 equivale a maior número de casos</p>
                               <p><b>Nome da Cidade</b>:@if(isset($pp->cidade)){{$pp->cidade}} @else Cidade não informada @endif</p>
                               <p><b>Percentual de casos</b>:{{$pp->porcentagem}}</p>
                               <p></p><br/>
                                <button class="c-btn c-btn--danger" data-dismiss="modal">
                                    Já enviado anteriormente - Post não será enviado.
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>