@extends('layouts.admin')
@section('content')
@can('whats_new_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.whats-news.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.whatsNew.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.whatsNew.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-WhatsNew">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.whatsNew.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.whatsNew.fields.title') }}
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($whatsNews as $key => $whatsNew)
                        <tr data-entry-id="{{ $whatsNew->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $whatsNew->id ?? '' }}
                            </td>
                            <td>
                                {{ $whatsNew->title ?? '' }}
                            </td>
                            <td>
                                @if ($whatsNew->desciption == '')
                                    No Content available!!!!
                                @else
                                {!! $whatsNew->desciption ?? '' !!}
                                @endif

                            </td>
                            <td>
                                @can('whats_new_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.whats-news.show', $whatsNew->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('whats_new_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.whats-news.edit', $whatsNew->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('whats_new_delete')
                                    <form action="{{ route('admin.whats-news.destroy', $whatsNew->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('whats_new_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.whats-news.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-WhatsNew:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
