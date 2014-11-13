<div role="tabpanel" class="tab-pane active" >
  <table class="table table-hover">
    <thead>
      <tr>
        <th width="300">cassette id</th>
        <th>numpart</th>
        <th>notes</th>
      </tr>
     </thead>
    <tbody>
      @foreach ($cassette as $item)      
      <tr>
        <td><a href="{{$bid}}/cassette/{{$item->id}}">{{$item->id}}</a></td>
        <td>{{$item->numpart}}</td>
        <td>{{$item->notes}}</td>
      </tr>      
      @endforeach 
    </tbody>
  </table>
</div>