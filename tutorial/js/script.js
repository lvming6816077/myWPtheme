$(function(){
    var myTheme = {
        'initClick' : function(){
            $('.icon-search').click(this.showSearch);
        },
        'showSearch' : function(e){
            $(e.currentTarget).next('.search-form').toggle();
            $(e.currentTarget).toggleClass('black');
        },
    };
    myTheme.initClick();
});