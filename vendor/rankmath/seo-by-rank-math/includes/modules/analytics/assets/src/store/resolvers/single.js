/**
 * WordPress dependencies
 */
import apiFetch from '@wordpress/api-fetch'
import { dispatch } from '@wordpress/data'

/**
 * Get post data.
 *
 * @param {number} id Single post id.
 */
export function getSinglePost( id ) {
	apiFetch( {
		method: 'GET',
		path: 'rankmath/v1/an/post/' + id,
	} ).then( ( response ) => {
		dispatch( 'rank-math' ).updateSinglePost( id, response )
	} )
}
