import Api from '../../api/index'

import {
    GET_DATA,
    GET_DATA_SUCCESS,
} from '../mutation_type'

export default {
    namespaced: true,
    state: {
        unit:{
                id: null,
                property_id: null,
                unit_type: null,
                unit_status: null,
                unit_ref: null,
                full_address: null,
                address_line_1: null,
                address_line_2: null,
                city: null,
                county: null,
                country: null,
                area: null,
                postcode: null,
                market_rent: null,
                market_rent_frequency: null,
                available_from: null,
                available_since: null,
                unit_owner_id: null,
                letting_agent_id: null,
                portal_address: null,
                short_description: null,
                description: null,
                portal_unit_type: null,
                size: null,
                size_unit: null,
                furnished: null,
                max_occupancy: null,
                bathrooms: null,
                floors: null,
                bedrooms: null,
                receptions: null,
                smart_meters: null,
                date_available: null,
                rental_term: null,
                deposit_amount: null,
                service_charge: null,
                service_charge_amount: null,
                council_tax_band: null,
                council_account_no: null,
                council_id: null,
                portal_market_rent: null,
                portal_market_rent_frequency: null,
                sharing_tenancies: null,
                i_manage_this: null,
                main_image_url: null,
                epc_urls: [],
                floor_plan_urls: [],
                image_urls: [],
                features: [],
                tags: [],
                modified: null,
                created: null
            },
        images: [],
    },
    actions: {
        getUnit(context, id) {
            let header = {
                'Authorization':'Bearer 5b798f9cd0107d0c7aa353a77c6664dfa73629c1f31295cd2b10e5581b2e26db',
                'Content-Type': 'application/json',
                'X-ENTITYID': '82013',
                'Cache-Control': 'no-cache'
            };

            let headers = header

            context.commit('GET_DATA', true)

            Api.request('get', `/units/${id}`, '', headers)
                .then(response => {
                    context.commit('GET_DATA_SUCCESS', response.data)
                    context.commit('GET_DATA', false)
                }).catch(error => {
                    context.commit('GET_DATA_FEILURE', response.data)
                    this.error = error
                })
        },
    },
    mutations: {
        [GET_DATA_SUCCESS](state, payload) {
            state.unit = payload.data
        },
        [GET_DATA](state, payload) {

        }
    }
}