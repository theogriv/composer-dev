/**
 * External dependencies
 */
import { isUndefined } from 'lodash'

/**
 * Internal dependencies
 */
import { filtersToUrlParams } from '../../functions'

/**
 * Get posts overview stats.
 *
 * @param {Object} state The app state.
 *
 * @return {string} Return posts overview.
 */
export function getPostsOverview( state ) {
	return state.appData.postsOverview
}

/**
 * Get posts summary.
 *
 * @param {Object} state The app state.
 *
 * @return {string} Return posts summary.
 */
export function getPostsSummary( state ) {
	return state.appData.postsSummary
}

/**
 * Get analytics summary.
 *
 * @param {Object} state The app state.
 *
 * @return {string} Return analytics summary.
 */
export function getAnalyticsSummary( state ) {
	return state.appData.analyticsSummary
}

/**
 * Get all posts rows.
 *
 * @param {Object} state The app state.
 *
 * @return {string} Return posts rows.
 */
export function getPostsRowsAll( state ) {
	return state.appData.postsRows
}

/**
 * Get posts rows all filtered by page.
 *
 * @param {Object} state The app state.
 * @param {number} page The page number.
 *
 * @return {string} Return posts rows.
 */
export function getPostsRows( state, page ) {
	return state.appData.postsRows[ page ]
}

/**
 * Get all posts rows by objects.
 *
 * @param {Object} state The app state.
 *
 * @return {string} Return posts rows.
 */
export function getPostsRowsByObjectsAll( state ) {
	return state.appData.postsRowsByObjects
}

/**
 * Get posts rows by objects filtered by page and filter params.
 *
 * @param {Object} state The app state.
 * @param {number} page The page number.
 * @param {string} filters The filter parameter.
 *
 * @return {string} Return posts rows.
 */
export function getPostsRowsByObjects( state, page, filters ) {
	let params = filtersToUrlParams( filters )
	params = '' === params ? 'all' : params

	return isUndefined( state.appData.postsRowsByObjects[ page ] ) ? {} : state.appData.postsRowsByObjects[ page ][ params ]
}
