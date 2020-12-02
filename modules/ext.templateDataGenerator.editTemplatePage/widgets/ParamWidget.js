/**
 * TemplateData Param Widget
 *
 * @class
 * @extends OO.ui.DecoratedOptionWidget
 * @mixes OO.ui.mixin.DraggableElement
 *
 * @param {Object} data Parameter data
 * @param {Object} [config] Configuration object
 */
function ParamWidget( data, config ) {
	config = config || {};

	// Parent constructor
	ParamWidget.parent.call( this, $.extend( {}, config, { data: data.key, icon: 'menu' } ) );

	// Mixin constructors
	OO.ui.mixin.DraggableElement.call( this, $.extend( { $handle: this.$icon } ) );

	this.key = data.key;
	this.label = data.label;
	this.aliases = data.aliases || [];
	this.description = data.description;

	// Initialize
	this.$element.addClass( 'tdg-templateDataParamWidget' );
	this.buildParamLabel();
}

/* Inheritance */

OO.inheritClass( ParamWidget, OO.ui.DecoratedOptionWidget );

OO.mixinClass( ParamWidget, OO.ui.mixin.DraggableElement );

/**
 * Build the parameter label in the parameter select widget
 */
ParamWidget.prototype.buildParamLabel = function () {
	var i, len,
		keys = this.aliases.slice(),
		$paramName = $( '<div>' )
			.addClass( 'tdg-templateDataParamWidget-param-name' ),
		$aliases = $( '<div>' )
			.addClass( 'tdg-templateDataParamWidget-param-aliases' ),
		$description = $( '<div>' )
			.addClass( 'tdg-templateDataParamWidget-param-description' );

	keys.unshift( this.key );

	$paramName.text( this.label || this.key );
	$description.text( this.description );

	for ( i = 0, len = keys.length; i < len; i++ ) {
		$aliases.append(
			$( '<span>' )
				.addClass( 'tdg-templateDataParamWidget-param-alias' )
				.text( keys[ i ] )
		);
	}

	this.setLabel( $aliases.add( $paramName ).add( $description ) );
};

module.exports = ParamWidget;
