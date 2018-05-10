).

Fixed Issues:

* [#12506](http://dev.ckeditor.com/ticket/12506): [Safari] Fixed: Cannot paste into inline editor if the page has `user-select: none` style. Thanks to [shaohua](https://github.com/shaohua)!
* [#12683](http://dev.ckeditor.com/ticket/12683): Fixed: [Filter](http://docs.ckeditor.com/#!/guide/dev_acf) fails to remove custom tags. Thanks to [timselier](https://github.com/timselier)!
* [#12489](http://dev.ckeditor.com/ticket/12489) and [#12491](http://dev.ckeditor.com/ticket/12491): Fixed: Various issues related to restoring the selection after performing operations on filler character. See the [fixed cases](http://dev.ckeditor.com/ticket/12491#comment:4).
* [#12621](http://dev.ckeditor.com/ticket/12621): Fixed: Cannot remove inline styles (bold, italic, etc.) in empty lines.
* [#12630](http://dev.ckeditor.com/ticket/12630): [Chrome] Fixed: Selection is placed outside the paragraph when the [New Page](http://ckeditor.com/addon/newpage) button is clicked. This patch significantly simplified the way how the initial selection (a selection after the content of the editable is overwritten) is being fixed. That might have fixed many related scenarios in all browsers.
* [#11647](http://dev.ckeditor.com/ticket/11647): Fixed: The [`editor.blur`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-blur) event is not fired on first blur after initializing the inline editor on an already focused element.
* [#12601](http://dev.ckeditor.com/ticket/12601): Fixed: [Strikethrough](http://ckeditor.com/addon/basicstyles) button tooltip spelling.
* [#12546](http://dev.ckeditor.com/ticket/12546): Fixed: The Preview tab in the [Document Properties](http://ckeditor.com/addon/docprops) dialog window is always disabled.
* [#12300](http://dev.ckeditor.com/ticket/12300): Fixed: The [`editor.change`](http://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-change) event fired on first navigation key press after typing.
* [#12141](http://dev.ckeditor.com/ticket/12141): Fixed: List items are lost when indenting a list item with content wrapped with a block element.
* [#12515](http://dev.ckeditor.com/ticket/12515): Fixed: Cursor is in the wrong position when undoing after adding an image and typing some text.
* [#12484](http://dev.ckeditor.com/ticket/12484): [Blink/WebKit] Fixed: DOM is changed outside the editor area in a certain case.
* [#12688](http://dev.ckeditor.com/ticket/12688): Improved the tests of the [styles system](http://docs.ckeditor.com/#!/api/CKEDITOR.style) and fixed two minor issues.
* [#12403](http://dev.ckeditor.com/ticket/12403): Fixed: Changing the [font](http://ckeditor.com/addon/font) style should not lead to nesting it in the previous style element.
* [#12609](http://dev.ckeditor.com/ticket/12609): Fixed: Incorrect `config.magicline_putEverywhere` name used for a [Magic Line](http://ckeditor.com/addon/magicline) all-encompassing [`config.magicline_everywhere`](http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-magicline_everywhere) configuration option.


## CKEditor 4.4.5

New Features:

* [#12279](http://dev.ckeditor.com/ticket/12279): Added a possibility to pass a custom evaluator to [`node.getAscendant()`](http://docs.ckeditor.com/#!/api/CKEDITOR.dom.node-method-getAscendant).

Fixed Issues:

* [#12423](http://dev.ckeditor.com/ticket/12423): [Safari7.1+] Fixed: *Enter* key moved cursor to a strange position.
* [#12381](http://dev.ckeditor.com/ticket/12381): [iOS] Fixed: Selection issue. Thanks to [Remiremi](https://github.com/Remiremi)!
* [#10804](http://dev.ckeditor.com/ticket/10804): Fixed: `CKEDITOR_GETURL` is not used w