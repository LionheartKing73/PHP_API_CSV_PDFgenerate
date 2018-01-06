!function ($) {

  $(function(){
    
    // fuelux datagrid
    var DataGridDataSource = function (options) {
      this._formatter = options.formatter;
      this._columns = options.columns;
      this._delay = options.delay;
    };

    DataGridDataSource.prototype = {

      columns: function () {
        return this._columns;
      },

      data: function (options, callback) {
        //var url = 'js/data/datagrid.json';
        var url ='functional_api/SA_DBconnect.php?id=';
        var self = this;

        setTimeout(function () {

          var data = $.extend(true, [], self._data);

          $.ajax(url, {
            dataType: 'json',
            async: false,
            type: 'GET'
          }).done(function (response) {

            //data = response.geonames;
            //data=$.parseJSON(response);
            data=response;
            // SEARCHING
            if (options.search) {
              data = _.filter(data, function (item) {
                var match = false;

                _.each(item, function (prop) {
                  if (_.isString(prop) || _.isFinite(prop)) {
                    if (prop.toString().toLowerCase().indexOf(options.search.toLowerCase()) !== -1) match = true;
                  }
                });

                return match;
              });
            }

            // FILTERING
            if (options.filter) {
              data = _.filter(data, function (item) {
                switch(options.filter.value) {
                  case 'lt5m':
                    if(item.population < 5000000) return true;
                    break;
                  case 'gte5m':
                    if(item.population >= 5000000) return true;
                    break;
                  default:
                    return true;
                    break;
                }
              });
            }

            var count = data.length;

            // SORTING
            if (options.sortProperty) {
              data = _.sortBy(data, options.sortProperty);
              if (options.sortDirection === 'desc') data.reverse();
            }

            // PAGING
            var startIndex = options.pageIndex * options.pageSize;
            var endIndex = startIndex + options.pageSize;
            var end = (endIndex > count) ? count : endIndex;
            var pages = Math.ceil(count / options.pageSize);
            var page = options.pageIndex + 1;
            var start = startIndex + 1;

            data = data.slice(startIndex, endIndex);

            if (self._formatter) self._formatter(data);

            callback({ data: data, start: start, end: end, count: count, pages: pages, page: page });
          }).fail(function(e){

          });
        }, self._delay);
      }
    };

    $('#MyStretchGrid').each(function() {
      $(this).datagrid({
          dataSource: new DataGridDataSource({
          // Column definitions for Datagrid
          columns: [
          {
            property: 'Id',
            label: 'PO #',
            sortable: true
          },
          {
            property: 'FromName',
            label: 'From',
            sortable: true
          },
          {
            property: 'ToName',
            label: 'To',
            sortable: true
          },
          {
            property: 'ShipMode',
            label: 'Ship Mode',
            sortable: true
          },
          {
            property: 'Destination',
            label: 'Destination',
            sortable: true
          }
          ,
          {
            property: 'StyleNumber',
            label: 'Style #',
            sortable: true
          },
          {
            property: 'CustomerName',
            label: 'Customer',
            sortable: true
          },
            {
            property: 'InvoiceNumber',
            label: 'Invoice',
            sortable: true
          },
            {
            property: 'XFTYDate',
            label: 'X-FTY Date',
            sortable: true
          },
           {
            property: 'HandoverDate',
            label: 'Handover Date',
            sortable: true
          },
           {
            property: 'Division',
            label: 'Division',
            sortable: true
          },
           {
            property: 'Container',
            label: 'Container',
            sortable: true
          },
          
          {
            property: 'Dimention',
            label: 'Dimention',
            sortable: true
          },
          
          {
            property: 'NW',
            label: 'NW',
            sortable: true
          },
          
          {
            property: 'GW',
            label: 'GW',
            sortable: true
          }
        ],

//    columns: [
//           {
//             property: 'toponymName',
//             label: 'PO #',
//             sortable: true
//           },
//           {
//             property: 'countrycode',
//             label: 'Style #',
//             sortable: true
//           },
//           {
//             property: 'population',
//             label: 'Color',
//             sortable: true
//           },
//             {
//             property: 'division',
//             label: 'Division',
//             sortable: true
//           },
//           {
//             property: 'fcodeName',
//             label: 'ETA Date',
//             sortable: true
//           },
//            {
//             property: 'fcodeName',
//             label: 'X-FTY Date',
//             sortable: true
//           },
//            {
//             property: 'fcodeName',
//             label: 'Handover Date',
//             sortable: true
//           },
//            {
//             property: 'fcodeName',
//             label: 'Vendor',
//             sortable: true
//           },
          
//           {
//             property: 'geonameId',
//             label: 'Edit',
//             sortable: true
//           }
//         ],


          // Create IMG tag for each returned image
          formatter: function (items) {
            $.each(items, function (index, item) {
              item.geonameId = '<a href="create-asn.php?geonameid='+item.geonameId+'"><i class="fa fa-pencil"></i></a>';
            });
          }
      })
      });
    });
    
  });
}(window.jQuery);