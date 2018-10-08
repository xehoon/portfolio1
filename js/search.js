
  $( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
          }
        });
      }
    });
    var data = [
      { label: "박원순", category: "시장" },
      { label: "서울시장", category: "박원순" },
      { label: "서울행사", category: "촛불집회" },
      { label: "광화문", category: "문화" },
      { label: "촛불집회", category: "문화" },
      { label: "청계천", category: "문화" },
      { label: "전등축제", category: "문화" },
      { label: "세금납부", category: "세금" },
      { label: "김경래", category: "실업자" },
      { label: "박준섭", category: "실업자" },
      { label: "그린컴퓨터 아트학원", category: "폐업" },
      { label: "홍준표", category: "적폐" }
    ];
 
    $( "#search" ).catcomplete({
      delay: 0,
      source: data
    });
  } );
