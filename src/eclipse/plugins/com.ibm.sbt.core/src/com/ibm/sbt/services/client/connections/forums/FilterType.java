/*
 * � Copyright IBM Corp. 2013
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 * you may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at:
 * 
 * http://www.apache.org/licenses/LICENSE-2.0 
 * 
 * Unless required by applicable law or agreed to in writing, software 
 * distributed under the License is distributed on an "AS IS" BASIS, 
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or 
 * implied. See the License for the specific language governing 
 * permissions and limitations under the License.
 */
package com.ibm.sbt.services.client.connections.forums;

/**
 * Class used in constructing URL for Forums service
 * @author Manish Kataria
 */

public enum FilterType {
	
	MY("my"),
	PUBLIC("public"),
	RESOURCES("resources");
	
	String filterType;
	
	private FilterType(String filterType) {
		this.filterType = filterType;
	}
	
	/**
	 * Wrapper method to return filter type
	 * <p>
	 */
	public String getFilterType(){return filterType;}

}