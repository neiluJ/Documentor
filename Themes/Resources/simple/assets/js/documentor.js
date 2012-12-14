
var SideMenu = new Class({

    Implements: [Options],

    options: {
        mainList: 'cpnlist',
        subs: 'ns',
        activeClass: 'active'
    },

    initialize:function(options) {
        this.setOptions(options);

        var elems = $$('li.' + this.options.subs +'>a');
        Array.each(elems, function(element) {
            element.addEvent('click', function (e) {
                e.stop();
                this.click(element);
            }.bind(this));
            this.init(element);
        }.bind(this));
    },

    init: function(element) {
        var parent = element.getParent().getChildren('ul');
        if(parent == null || parent === undefined) return;

        var active = parent.getElements('li a.'+ this.options.activeClass);
        var hasActive = (active[0].length > 0 ? true : false);
        if(!hasActive)
            parent.setStyle('display', 'none');
    },

    click: function(element) {
        var parent = element.getParent().getChildren('ul');
        if(parent == null || parent === undefined) return;

        parent.setStyle('display', (parent.getStyle('display') == 'none' ? 'block' : 'none'));
    }
});

var DocList = new Class({
    Implements: [Options],

    options: {
        list: 'doclist',
        collapsed: true,
        contentsTag: 'div',
        togglerTag: 'h5'
    },

    initialize:function(options) {
        this.setOptions(options);

        var elems = $$('ul.' + this.options.list +'>li');
        Array.each(elems, function(element) {
            this.init(element);
        }, this);
    },
    
    init: function(LIElement) {
        var toggler = LIElement.getElementsByTagName(this.options.togglerTag)[0],
            contents = LIElement.getElementsByTagName(this.options.contentsTag)[0];

        if(!contents) return;
        if(this.options.collapsed)
            contents.hide();

        if(toggler) {
            toggler.addEvent('click', function(e) {
               e.stop();
               if(contents.isVisible())
                contents.dissolve();
               else
                  contents.reveal();
            });
        }
    }
});
window.addEvent('domready', function() {
    var menu = new SideMenu();
    var list = new DocList({list: 'methods'});
    new Fx.SmoothScroll({ duration:250, offset:{x:0,y:-20}});
});