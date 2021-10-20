<x-app-layout title="{{$pag->name}}">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            @if($edit) Editar @else Adicionar @endif {{$pag->name}}
        </h2>

        <form method="POST" @if($edit) action="{{$pag->slug}}/{{$values->id}}" @else action="{{$pag->slug}}" @endif autocomplete="off">
            {{ csrf_field() }}
            @if($edit) {{ method_field('PUT') }} @endif
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                @foreach($fields as $f)
                    @if($f != 'ids_users')
                        <label class="block text-sm mb-4">
                            <span class="text-gray-700 dark:text-gray-400">{{Str::replace('Id ', '', Str::title(Str::replace('_', ' ', $f)))}}</span>

                            @if($types[$loop->index] == 'string' || $types[$loop->index] == 'integer')
                                
                                <input @if($edit) value="{{$values[$f]}}" @else value="" @endif name="{{$f}}" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{Str::title(Str::replace('_', ' ', $f))}}" autocomplete="off"/>
                            
                            @elseif($types[$loop->index] == 'text')
                                
                                <textarea rows="7" name="{{$f}}" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{Str::title(Str::replace('_', ' ', $f))}}" autocomplete="off">@if($edit) {{$values[$f]}} @endif</textarea>
                            
                            @else

                            @endif









 <!-- ! ! ! MELHORAR O CÓDIGO EM COMENTÁRIO ABAIXO ! ! ! -->
                       
{{-- 
    @if($f == 'id_categoria')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\ChallengesCategories::get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_tipo_planta')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\PlantsType::where('id_tipo', 1)->get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_tipo_folha')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\PlantsType::where('id_tipo', 2)->get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_tipo_flor')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\PlantsType::where('id_tipo', 3)->get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_tipo_fruto')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\PlantsType::where('id_tipo', 4)->get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_tipo_habitat')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\PlantsType::where('id_tipo', 5)->get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_tipo')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\PlantsTypeCategory::get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'id_jornada')
        <select name="{{$f}}" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
            @foreach(App\Models\Journeys::get() as $t)
                <option @if($edit) @if($values[$f] == $t->name) selected @endif @endif value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    @elseif($f == 'icon')
        <input name="{{$f}}" type="file" accept="image/png, image/gif, image/jpeg" cLass="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
    @else
        @if($types[$loop->index] == 'string' || $types[$loop->index] == 'integer')
            <input @if($edit) value="{{$values[$f]}}" @else value="" @endif name="{{$f}}" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{Str::title(Str::replace('_', ' ', $f))}}" autocomplete="off"/>
        @elseif($types[$loop->index] == 'text')
            <textarea rows="7" name="{{$f}}" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{Str::title(Str::replace('_', ' ', $f))}}" autocomplete="off">@if($edit) {{$values[$f]}} @endif</textarea>
        @else
        @endif
    @endif 
--}}











                        </label>
                    @endif
                @endforeach

                <input type="submit" value="@if($edit) Editar @else Adicionar @endif" class="cursor-pointer px-3 py-1 mt-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-md active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray" style="max-width:fit-content;justify-self:end" />
            
            </div>
        </form>
    
    </div>
</x-app-layout>