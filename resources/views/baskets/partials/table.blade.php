@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif

<table id="producer_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Cestas</th>
        <th>Início da Cesta</th>
        <th>Término da Cesta</th>
        <th>Ações</th>
    </tr>
    </thead>

    @forelse ($baskets as $basket)
        <tr>

            <td><a href="{{ route('producers.show', ['id' => $basket->id]) }} ">{{$basket->id}}</a></td>
            <td>{{ is_null($basket->title) ? : $basket->title}}</td>
            <td>{{ is_null($basket->start) ? : $basket->start}}</td>
            <td>{{ is_null($basket->end) ? : $basket->end}}</td>
            <td>
               <button><i class="fas fa-clipboard-list"></i> Disponibilidade</button>
                <button><i class="fas fa-shopping-basket"></i>Montar Cesta</button>
                <button><i class="fas fa-leaf"></i>Colheita</button>
                <button><i class="fas fa-money-bill-alt"></i>Partilha</button>
            </td>
        </tr>
    @empty
        <p>Nenhum Produtor encontrado</p>
    @endforelse
</table>
