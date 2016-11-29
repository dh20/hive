package org.apache.hive.hplsql;

import org.junit.Test;

import static org.junit.Assert.*;

/**
 * Created by xupeng on 2016/11/23.
 */
public class UtilsTest {
    @Test
    public void toTimestamp() throws Exception {
        System.out.println(Utils.toTimestamp("2016-11-21"));;
    }

}