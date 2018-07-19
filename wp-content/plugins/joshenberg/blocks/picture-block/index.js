/**
 * Block dependencies
 * These are what we include in our block
 */
import icons from './icons';
import './editor.scss';

/**
 * Internal block libraries
 * These are mostly coming form what WordPress has either dev for us, or included.
 */
const { __ } = wp.i18n;
const {
    registerBlockType,
} = wp.blocks;
const {
    Editable,
    MediaUpload,
    RichText,
} = wp.editor;
const {
    Button,
} = wp.components;

/**
 * Register example block
 */
export default registerBlockType( 
  // namespace/block-name
  'joshblocks/image-upload', 
  {
    title: __( 'Example - Image Upload Josh', 'joshblocks' ),
    description: __( 'An example of how to use the MediaUpload component.', 'joshblocks'),
    category: 'common',
    icon: {
      background: 'rgba(254, 243, 224, 0.52)',
      src: icons.upload,
    },         
    keywords: [
      __( 'Image', 'joshblocks' ),
      __( 'MediaUpload', 'joshblocks' ),
      __( 'Message', 'joshblocks' ),
    ],
    attributes: {
      message: {
        type: 'array',
        source: 'children',
        selector: '.message-body',
      },
      imgURL: {
        type: 'string',
        source: 'attribute',
        attribute: 'src',
        selector: 'img',
      },
      imgID: {
        type: 'number',
      },
      imgAlt: {
        type: 'string',
        source: 'attribute',
        attribute: 'alt',
        selector: 'img',
      },
      imgTitle: {
        type: 'string',
        source: 'attribute',
        attribute: 'title',
        selector: 'img',
      }
    },

    // Edit is what gets sent to the wp-admin end
    edit: props => {
      const { attributes: { imgID, imgURL, imgAlt, imgTitle, message }, className, setAttributes, isSelected } = props;

      const divStyle = {
        backgroundImage: "url(" + imgURL + ")"
      };

      const onSelectImage = img => {
        setAttributes( {
          imgID: img.id,
          imgURL: img.url,
          imgAlt: img.alt,
          imgTitle: img.title,
        } );
      };
      console.log(props);

      const onRemoveImage = () => {
        setAttributes({
          imgID: null,
          imgURL: null,
          imgAlt: null,
          imgTitle: null,
        });
      }

      return (
        <div className={ className }>

          <div className="message-body">
            <RichText
              tagName="div"
              multiline="p"
              className="message"
              placeholder={ __( 'Add your custom message', 'jsforwpblocks' ) }
              onChange={ message => { setAttributes( { message } ) } }
              value={ message }
            />
          </div>

          <div style={divStyle}></div>
        
          { ! imgID ? (
            <MediaUpload
              onSelect={ onSelectImage }
              type="image"
              value={ imgID }
              render={ ( { open } ) => (
                <Button className={ "button button-large" } onClick={ open } >
                  { icons.upload }
                  { __( ' Upload Image', 'joshblocks' ) }
                </Button>
              ) }
            >
            </MediaUpload>
          ) : (
            <p className="image-wrapper">
              <img src={ imgURL } alt={ imgAlt } />
              { isSelected ? (
                <Button className="remove-image" onClick={ onRemoveImage } >
                  { icons.remove }
                </Button>
              ) : null }
            </p>
          )}

        </div>
      );
    },

    // Save is what gets sent to the front end.
    save: props => {
      const { imgURL, imgAlt, imgTitle, message } = props.attributes;

      const divStyle = {
        backgroundImage: `url(${imgURL})`
      };

      return (

        <div>
          <div className="message-body">
            { message }
          </div>
          <div style={divStyle}></div>
          <p><img src={ imgURL } alt={ imgAlt }/></p>
        </div>
      );
    },
  },
);

